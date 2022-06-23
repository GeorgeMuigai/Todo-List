<?php
    include 'db.php';
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
        <p class="h2 text-center">Your Tasks</p>
        <button type="button" class="btn btn-primary"><a href="add.php" class="text-light">Add Task</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM tasks";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $task = $row['task'];
                        echo '<tr>
                <td>' . $task . '</td>
                <td>
                <button type="button" class="btn btn-primary"><a href="update.php?id=' . $id . '" class="text-light">Update</a></button>
                <button type="button" class="btn btn-danger"><a href="delete.php?id=' . $id . '" class="text-light">Delete</a></button>
                </td>
              </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>