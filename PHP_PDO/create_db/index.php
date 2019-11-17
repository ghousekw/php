<?php
    //create variables for db,user,password,name
    $dsn = "mysql:host=localhost;dbname=new_db;";
    $db_user = "root";
    $db_password = "";

    //create connection
    try{
        $conn = new PDO($dsn,$db_user,$db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    }
    catch(PDOException $e){
        echo "Connection Failed<br>".$e->getMessage();
    }
?>