<?php
    include "db.php";

    $id = $_GET['id'];
    $delete = "DELETE FROM tasks WHERE id = $id";
    $delResult = mysqli_query($con, $delete);

    if($delResult){
        header("location:index.php");
    }else{
        die (mysqli_errno($con));
    }
?>