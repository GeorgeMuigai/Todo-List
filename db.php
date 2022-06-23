<?php

    #CREATE TABLE test (id int PRIMARY KEY AUTO_INCREMENT, task VarChar(70))
    #CREATE TABLE IF NOT EXISTS tasks (id int PRIMARY KEY AUTO_INCREMENT, task VarChar(80));
    $con = new mysqli('localhost', 'root', '');
    $sql = "CREATE DATABASE IF NOT EXISTS todos";
    

    $result = mysqli_query($con, $sql);

    if(!$result){
        die(mysqli_errno($con));
    }else{
        $con = new mysqli('localhost', 'root', '', 'todos');
        $createTable = "CREATE TABLE IF NOT EXISTS tasks (id int PRIMARY KEY AUTO_INCREMENT, task VarChar(80))";
        $tableResult = mysqli_query($con, $createTable);
        if(!$tableResult){
            die (mysqli_errno($con));
        }
    }
?>