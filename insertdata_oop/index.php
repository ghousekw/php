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
        //Checking if user is clicked submit button
        if(isset($_REQUEST['submit'])){
            // Check if there is any empty fields
            if(($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']=="")){
                echo "Fill all fields..";
            }else{
                // Inserting into database
                $name = $_REQUEST['name'];
                $roll = $_REQUEST['roll'];
                $address = $_REQUEST['address'];
                $sql = "INSERT INTO student(name,roll,address)values('$name','$roll','$address')";
                if($conn->query($sql)===TRUE){
                    echo "Record inserted successfully";
                }else{
                    echo "Insertion failed";
                }
            }
        }
        // //retrieve db 
        // $sql = "SELECT *FROM student";
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();
        // if($result->num_rows>0){
        //     while($row=$result->fetch_assoc()){
        //         echo "ID:".$row['id'].
        //         "Name:".$row['name'].
        //         "Roll:".$row['roll'].
        //         "Address".$row['address'].
        //         "<br>";
        //     }
        // }else{
        //     echo "0 Records";
        // }
        // Insert a record
        // <?php
        //     $sql = "INSERT INTO student(name,roll,address)
        //         values('Kunal',107,'Vizag')";
        //     if($conn->query($sql)===TRUE){
        //         echo "Record inserted successfully";
        //     }else{
        //         echo "Insertion failed";
        //     }
        $conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create db using oop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="text" name="roll" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>