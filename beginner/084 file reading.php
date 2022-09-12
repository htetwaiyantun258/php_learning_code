<?php

$file = "myWrite.txt";
$readHandlar = fopen($file,"r");
$size = filesize($file);
$data = fread($readHandlar,$size);
echo $data;