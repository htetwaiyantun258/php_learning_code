<?php

$str_word = "A the removes whites or other predefined characters";
$var = str_word_count($str_word);

echo $var;

// $var1 = substr($str_word,strpos($str_word,"the"),stripos($str_word,"or"));

$var2 = substr($str_word,0,strlen($str_word)-1);

echo $var2;
