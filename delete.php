<?php
    include "db.php";

    // get the id of the task to be deleted
    $id = $_GET['id'];

    // delete the task
    $delete = "DELETE FROM tasks WHERE id = $id";
    $delResult = mysqli_query($con, $delete);

    if($delResult){
        // if the task is successfully deleted the user will be redirected to home page
        header("location:index.php");
    }else{
        die (mysqli_errno($con));
    }
?>