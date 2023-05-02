<?php

    $host = "localhost";
    $email = "root";
    $password = "";
    $database = "onlineprow";

    $con = mysqli_connect($host, $email, $password, $database);

    if(!$con){
        die("connection failed: ". mysqli_connect_error());
    }
    
?>