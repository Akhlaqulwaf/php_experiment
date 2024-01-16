<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db = "crudphp";

    $conn = mysqli_connect($localhost, $username, $password, $db);

    if($conn->connect_error){
        die("Connection error: ". $conn->connect_error);
    }
?>