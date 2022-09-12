<?php
   session_start();
   session_destroy();
   header("Location:index.php");

    include "link.php";

?>

<h1>I am Logout!</h1>