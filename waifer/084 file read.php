<?php


$file="test.txt"; //file path
$handle = fopen($file,'r'); //open file & read mood
$fSize=filesize($file);  //file size
$data = fread($handle,$fSize);  //file read for=> handle & size

echo $data;

echo "<hr>";

$fileOne = "test.txt";
// $handle = fopen($fileOne,'r');
$data = file_get_contents($fileOne);
echo $data;



?>