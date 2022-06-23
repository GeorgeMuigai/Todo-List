<?php

    $con = new mysqli('localhost', 'root', '');
    $sql = "CREATE DATABASE IF NOT EXISTS todos";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die(mysqli_errno($con));
    }
?>