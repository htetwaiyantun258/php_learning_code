<?php
    if(isset($_POST["submit"])){
        $uname = $_POST["username"];
        $uemail = $_POST["email"];
        $upass = $_POST["password"];
        // for name , email, pass
        echo "You Name =>" . $uname . "<br>";
        echo "You Email =>" . $uemail . "<br>";
        echo "You Password =>" . $upass . "<hr>";

        // for radio answer
        $uradio = $_POST["gender"];
        echo $uradio . "<hr>";

        // for checkbox
        $ucheckbox = $_POST["hobbies"];
        foreach($ucheckbox as $check ){
            echo $check . "br";
        }

    }
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
   <form action="" method="post">

   <input type="text" name="username" placeholder="username"> <br><br>
   <input type="email" name="email" placeholder="Email"> <br><br>
   <input type="password" name="password" placeholder="Password"> <br><br>

   <!-- radio start -->
   <h3>Choose Gender</h3>

   Male : <input type="radio" name="gender" value="male"> <br><br>
   Female : <input type="radio" name="gender" value="female">
    <!-- radio end -->

    <!-- checkbox start -->
    <h3>hobbies</h3>

    <input type="checkbox" name="hobbies[]" value="reading"> Reading <br><br>
    <input type="checkbox" name="hobbies[]" value="chess"> Chess <br><br>
    <input type="checkbox" name="hobbies[]" value="football playing"> Football Playing 
    <!-- checkbox end -->

    <!-- submit -->
    <input type="submit" name="submit" value="submit">




</form> 
</body>
</html>