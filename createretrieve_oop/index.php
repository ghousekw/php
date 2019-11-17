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
          <div class="col-sm-6">
            <?php
              $sql = "SELECT *FROM student";
              $result = $conn->query($sql);
              if($result->num_rows>0){
                echo "<table class='table border table-hover'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Roll</th>";
                echo "<th>Address</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row=$result->fetch_assoc()){
                  echo "<tr>";
                  echo "<td>".$row['id']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['roll']."</td>";
                  echo "<td>".$row['address']."</td>";
                  echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
              }else{
                echo ") records";
              }
            ?>
          </div>
        </div>
  </div>
  <?php $conn->close();?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>