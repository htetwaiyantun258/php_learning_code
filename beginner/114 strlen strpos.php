<?php

$str = "an apple";
$str_pos = "They The are the man.";

// echo strpos($str,"apple");
echo strpos($str_pos,"are") . "<br>";

$str_last = "A the removes whitespace or other predefined characters from the left side of a string";
echo strpos($str_last,"the"). "<br>";
echo stripos($str_pos,"The"). "<br>";
echo strripos($str_last,"The");
