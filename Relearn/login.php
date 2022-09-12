<?php
    session_start();
    require 'connect.php';
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  user WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email',$email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(empty($user)){
            echo "<script>alert('Incorrect credentials,Try Again!')</script>";
        }else{
            $vaild_password = password_verify($password,$user['password']);
            if($vaild_password){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['logged_in'] = time();
                header('location: index.php');
                exit;

            }else{
            echo "<script>alert('Incorrect credentials,Try Again!')</script>";

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
            <h1>Login</h1>
            <form action="" action="login.php" method="POST">
               
                <input type="email" name="email" require> Email <br><br>
                <input type="password" name="password" require> Password<br><br>
                <input type="submit" name="" value="Login" >
                <a href="register.php">Register</a>

            </form>
        </div>

    </div>
</body>
</html>