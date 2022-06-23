<?php
    include 'db.php';

    // check when the user clicks on the add task btn
    // and check whether the user input is empty
    // if empty no action will be taken
    if(isset($_POST['submit']) && !empty($_POST['task'])){
        $task = $_POST['task'];
        $insert = "INSERT INTO tasks (task) VALUES ('$task')";
        $insertResult = mysqli_query($con, $insert);

        if($insertResult){
            // if the task is successfully added the user will be redirected to home page
            header("location:index.php");
        }else{
            die (mysqli_errno($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Todo</title>
</head>

<body>
    <div class="container my-5">
    <p class="h2 text-center">Add Task</p>
        <form method="POST">
            <div class="mb-3">
                <label for="task" class="form-label">Task</label>
                <input type="text" class="form-control" id="task" name="task">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add Task</button>
        </form>
    </div>
</body>

</html>