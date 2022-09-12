<?php

// $var = "peoplepppp  ";
// $bol = preg_match("/p{2,3}/",$var);
// echo $bol? "True":"False";

// $var2 = "An amateur practices   until they can 123 play it correctly, a professional practices untill";
// $result =preg_replace('/[[:space:]]/',"__blank__",$var2);
// echo $result;

$space = "Brighter in myanmar";
$data = preg_replace("/[[:space:]]/","",$space);
$result = preg_match("/\s",$data);
echo $result? "True":"FALSE";