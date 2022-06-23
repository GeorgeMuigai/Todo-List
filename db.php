<?php

    ### Note ###
    ### you shouldn't edit any part of this file ###
    
    $con = new mysqli('localhost', 'root', '');

    // create todo database if it doesn't exist to avoid errors
    // if the database exists this part will be skipped 
    $sql = "CREATE DATABASE IF NOT EXISTS todos";
    

    $result = mysqli_query($con, $sql);

    if(!$result){
        die(mysqli_errno($con));
    }else{
        // this part executes ONLY IF the database 'todo' exists
        $con = new mysqli('localhost', 'root', '', 'todos');
        // this will create table 'tasks' if it doesn't exist in the todo database
        $createTable = "CREATE TABLE IF NOT EXISTS tasks (id int PRIMARY KEY AUTO_INCREMENT, task VarChar(80))";
        $tableResult = mysqli_query($con, $createTable);
        if(!$tableResult){
            die (mysqli_errno($con));
        }
    }
?>