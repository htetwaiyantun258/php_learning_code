<?php
session_start();

echo "<br>";

if(isset($_POST["submit"])){
    $user = $_POST["name"];
    $upass = $_POST["pass"];
    if($user == "O J" && $upass == "pessi"){
        $_SESSION['user'] = $user;
        $_SESSION['upass'] = $upass;    
        header("Location:member.php");
    }else{
        echo "Try Again!";
    }


}
include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <input type="text" name="name" placeholder="username"><br><br>
    <input type="password" name="pass" placeholder="userpass"> <br><br>
    <input type="submit" name="submit" id="" value="Login">
</form>
</body>
</html>