<?php
    include 'db.php';

    // get the id of the task to be updated
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $oTask = $row['task'];
    }

    if (isset($_POST['submit']) && !empty($_POST['task'])) {
        $task = $_POST['task'];
        $update = "UPDATE tasks SET id = $id, task = '$task' WHERE id = $id";
        $updateResult = mysqli_query($con, $update);

        if ($updateResult) {
            header("location:index.php");
        } else {
            die(mysqli_errno($con));
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
        <p class="h2 text-center">Update Task</p>
        <form method="POST">
            <div class="mb-3">
                <label for="task" class="form-label">Task</label>
                <input type="text" class="form-control" id="task" name="task" value="<?php
                                                                                        // get the task to be updated and autofill it 
                                                                                        // in this input
                                                                                        echo $oTask;
                                                                                        ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update Task</button>
        </form>
    </div>
</body>

</html>