<?php

require 'connect.php';


if(!empty($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == '' || $email == '' || $password == '') {
        echo "<script>alert('Fill the form data!')</script>";
    
    }else{
        $sql = "SELECT COUNT(email) AS num from user WHERE email = :email";
        $stmt = $db -> prepare($sql);

        //bind statement

        $stmt ->bindValue(':email',$email);

        //execute statement

        $stmt->execute();
        $row = $stmt ->fetch(PDO::FETCH_ASSOC);
    //   var_dump($row);
    if($row['num'] > 0){
        echo "<script>alert('exit email')</script>";
    }else{
        $paswordHash = password_hash($password,PASSWORD_BCRYPT);
        $sql = "INSERT INTO user(name,email,password) VALUE (:username,:email,:password) ";
        $stmt = $db->prepare($sql);
        $stmt ->bindValue(':username',$username);
        $stmt ->bindValue(':email',$email);
        $stmt ->bindValue(':password',$paswordHash);

        $result = $stmt->execute();
        if($result){
            echo "Thank for your registration!" .'<a href="login.php">Login</a>';
        }
    }
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h1>Register</h1>
            <form action="" action="register.php" method="POST">
                <input type="text" name="username" require class="form-control"> username  <br><br>
                <input type="email" name="email" require class="form-control"> Email <br><br>
                <input type="password" name="password" require class="form-control"> <br><br>
                <input type="submit" name="" value="Register" >
                <a href="login.php">Login</a>

            </form>
        </div>

    </div>
</body>
</html>