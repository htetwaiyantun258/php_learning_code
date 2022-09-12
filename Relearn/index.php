<?php
 session_start();
require 'connect.php';
if(empty($_SESSION['user_id']) || empty($_SESSION['logged_in'])){
    echo "
    <script>
    alert('Please login to continue ');
    window.location.href='login.php';
    </script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
</head>
<body>
    <?php

$stmt = $db->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();
$result = $stmt->fetchAll();
// print "<pre>";
// print_r($result);
// exit();


?>
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
                <h1>Post Management</h1>
                <div><a class="btn btn-primary" href="add.php">Create New</a>
                <a style="float: right;" class="btn btn-success" href="logout.php">logout</a></div><br>
                <thead>
                    <tr>
                        <th width="20%">Title</th>
                        <th width="40%">Descriptions</th>
                        <th width="20%">Created At</th>
                        <th width ="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result) {
                        foreach ($result as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value['title'] ?></td>
                        <td><?php echo $value['description'] ?></td>
                        <td><?php echo date('D-M-Y', strtotime($value['created_at'])) ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $value['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="bootstrap3/js/bootstrap.min.js"></script>
    <script src="bootstrap3/js/jquery.min.js"></script>

</body>
</html>