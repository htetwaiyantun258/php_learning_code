<?php

$var = "abcdotx 2345 ";
$result = preg_replace("/[[:alnum:]]/","",$var);
echo $result;

$anyChar = "One samll positive thought can change your whole day";
$bol1 = preg_match("/[p.p]/",$anyChar);
echo $bol1 ? "True": "False";

$test = "PHirP";
$bol2 = preg_match("/p\w{2,4}p/i",$test);
echo $bol2 ? "True": "False";
