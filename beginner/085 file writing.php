<?php

$file = "myMemo.txt";
$fileHandlar = fopen($file,"w");
fwrite($fileHandlar,"Hello My World!");
fclose($fileHandlar);