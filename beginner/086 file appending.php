<?php


$file = "myMemo.txt";
$fileHandlar = fopen($file,"a");
fwrite($fileHandlar,"I Love my world!");
fclose($fileHandlar);