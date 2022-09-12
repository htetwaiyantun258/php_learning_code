<?php

$str = "A the removes whitespace or other predefined characters from the left side of a string";


$total = str_word_count($str);
echo $total . "<br>";

echo $result = substr($str,0,4). "<br>";

echo $result = chunk_split($str,3,"/") . "<br>";