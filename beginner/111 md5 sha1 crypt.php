<?php

$pass = "code@#59";
$pass = md5($pass,false);

$pass1 = "@#45$%45^&";
$pass1 = sha1($pass1,false);
// echo $pass1;

$pass2 = "code@#1998";
$pass2 = crypt($pass2,$pass2);
echo $pass2;