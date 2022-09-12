<?php




$str = "A the removes whitespace or other predefined characters from the left side of a string";
echo strpos($str,"The") ."<br>";
echo strrpos($str,"The") . "<br>";

echo stripos($str,"The") . "<br>";
echo strripos($str,"The") . "<br>";