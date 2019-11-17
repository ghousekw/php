<?php
    //create a connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "newoop_db";
    $conn = new mysqli($db_host,$db_user,$db_password,$db_name);
    // Check a connection
    if(!$conn){
        die("Connection failed");
    }
    echo "Connection Successful..<hr>";
    // Create a table
    $sql = "CREATE TABLE dept (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255),
        Roll INT,
        Address TEXT
    )";
    if($conn->query($sql)===TRUE){
        echo "Table Creation successful";
    }else{
        echo "Table Creation Failed......";
    }
    // $conn->close();
?>