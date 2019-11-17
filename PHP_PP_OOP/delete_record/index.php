<?php
    //create db properties
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";
    //creaate connection
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    //check connection
    if(!$conn){
        die("connection failed");
    }
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
        if(mysqli_query($conn,$sql)){
          echo "New record inserted";
        }
        else{
          echo "Unable to insert";
        }
      }
    }
    //delete a record
    if(isset($_REQUEST['delete'])){
      $sql = "delete from student where id='{$_REQUEST['id']}'";
      if(mysqli_query($conn,$sql)){
        echo "Record Deleted";
      }else{
        echo "unsuccesful";
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
<div class="container">
  <h1>Available records in database</h1>
    <div class="row">
      <div class="col-sm-4">
        <form action="" method="POST">
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
          <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div><!--Col-sm-4-->
      <div class="col-sm-6 offset-sm-2">
      <?php
        $sql = "select *from student";     
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<table class='table'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Roll</th>";
                    echo "<th>Address</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['roll']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td><form action='' method='POST'>
                          <input type='hidden' name='id' value=" .$row['id']. ">
                          <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                    echo "</tr>";
                }
            echo "</tbody>";
            echo "</table>";
        }
      ?>
      </div><!--col-sm-6-->
    </div><!--row-->
</div><!--Container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>