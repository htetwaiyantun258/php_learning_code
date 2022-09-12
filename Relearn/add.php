<?php
require 'connect.php';
if(!empty($_POST)){
    $sql = 'INSERT INTO posts(title,description,created_at) VALUES (:title,:description,:created_at)';

    $pdo_statement = $db->prepare($sql);
    $result = $pdo_statement->execute(
        array(':title'=>$_POST['title'],':description'=>$_POST['description'],':created_at'=>$_POST['created_at'])
    );
    if($result){
        echo "<script>
      alert('record is added');window.location.href='index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Record</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="card">
        <div class="card-body">
            <h1>Add Post</h1>
            <form action="" action="login.php" method="POST">
               Title <br>
                <input type="text" name="title" require> <br>
                <br>Description <br>
                <input type="text" name="description" require> <br>
               <br> Date<br>
                <input type="date" name="created_at" require> <br><br>
                <input type="submit" name="" value="Register" class="btn btn-primary" >
                <a href="login.php" class="btn btn-warning">back</a>

            </form>
        </div>

    </div>
</body>
</html>