<?php


$test = "PHP@gmail.com";
$bol1 = preg_match("/^[a-zA-Z]+@[a-z]+\.[a-z]{3}$/",$test);
echo $bol1? "True": "False";


$test1 = "myanmar country is many poor people.";
if(preg_match("/poor/",$test1)){
    echo "right answer ". "<br>";
}