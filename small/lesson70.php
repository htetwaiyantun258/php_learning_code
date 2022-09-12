<?php

if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    $pass = $_GET['userpass'];
    $hobbies = $_GET['hobbies'];
    foreach ($hobbies as $hobbie) {
        echo $hobbie . "<br>";
    }
    echo $username . " " . $pass;

$app->run();


}

?>

<form action="<?php $_PHP_SELF?>" method="get">
    <input type="text" name="username"><br><br>
    <input type="password" name="userpass"><br><br>
    <h3>You Hobbies</h3>
    <input type="checkbox" name="hobbies[]">Reading <br><br>
    <input type="checkbox" name="hobbies[]">Watching <br><br>
    <input type="submit" name="submit">
    <input type="text">


</form>