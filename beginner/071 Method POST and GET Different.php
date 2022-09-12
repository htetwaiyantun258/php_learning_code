<?php
   if(isset($_GET["submit"])){
       $user_name = $_GET["username"];
       echo $user_name;
   }
?>


<form action="<?php $php_self ?>" method="$_GET">
    <input type="text" name="username">
    <button type="submit" name="submit">Register</button>
</form>