<?php
    //create db connection
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "test_db";
        $conn = new mysqli($db_host,$db_user,$db_password,$db_name);
    //check db connection
        if($conn->connect_error){
            die("connection failed");
        }
        echo "connection successful<hr>";
        //insert a record
        if(isset($_REQUEST['submit'])){
            if(($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']=="")){
            echo "<small>Fill all fields...</small><hr>";
            }
            else{
            $name = $_REQUEST['name'];
            $roll = $_REQUEST['roll'];
            $address = $_REQUEST['address'];
            $sql = "insert into student(name,roll,address) values('$name','$roll','$address')";
            if($conn->query($sql)){
                echo "New record inserted";
            }
            else{
                echo "Unable to insert";
            }
            }
        }
        //update a record
        if(isset($_REQUEST['update'])){
            if(($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']=="")){
                echo "<small>Fill all fields....</small>";
            }
            else{
                $name = $_REQUEST['name'];
                $roll = $_REQUEST['roll'];
                $address = $_REQUEST['address'];
            $sql  = "UPDATE student SET name = '$name', roll='$roll', address='$address' where id = {$_REQUEST['id']}";
            if($conn->query($sql)===TRUE){
                echo "Successfully Updated";
            }else{
                echo "Update failed";
            }
            }
        }
        // Delete a record
        if(isset($_REQUEST['delete'])){
            $sql = "DELETE FROM student WHERE id={$_REQUEST['id']}";
            if($conn->query($sql) === TRUE){
                echo "Record deleted successfully";
            }else{
                echo "unable to delete";
            }
        }
?>
<?php include_once('header.php')?>
<?php include_once('insert.php')?>
<?php include_once('retrieve.php')?>
<?php include_once('footer.php')?>