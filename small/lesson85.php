<?php

/*  // file reading
$file = "hello.txt"; //file path
$handler = fopen($file,'r');
$fsize = filesize($file);
$result = fread($handler,$fsize);
echo $result;
 */

//file writing

/* 
$file = "index.txt";
$handler = fopen($file, 'w');
fwrite($handler, "No happy");
fclose($file);

*/

// file append

$file = "index.txt";
$handler = fopen($file,'a');
fwrite($handler," But I try live");
fclose($file);

$fileName = "itbootcamp.txt";
$handler = fopen($fileName,'a');
fwrite($handler,"I love programming.");
fclose($handler);
