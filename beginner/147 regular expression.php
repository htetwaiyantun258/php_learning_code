<?php

$name = "For Teen Group";

$case = preg_match("/for/i",$name);
$bolResult = $case ? "True":"False";
echo $bolResult;

// $bol = preg_match("!group$!i",$name);
// // echo $bol ? "True":"False";

// $num = "country 144";
// $bol1 = preg_match("/country/",$num);

// echo $bol1 ? "Yes":"No" ;

// $char = "ami 123";

// $bolMark = preg_match("/[0-9]/",$char); //character range 0 to 9
// echo $bolMark ? "True": "False";

// $wordChar = "num 45";
// $bolTrue = preg_match("/[a-z]/",$wordChar); // a to z range char
// echo $bolTrue ? "True": "False"; 

// $azToAZ = "An amateur pra!";

// $bolsb = preg_match("/[a-z] | [A-Z]/",$azToAZ);
// echo $bolsb ? "/True" : "False";

// $notatoz = "mayfood@gmail.com";
// $bolnotatoz = preg_match("/[@]/",$notatoz);
// echo $bolnotatoz ? "True": "False";
