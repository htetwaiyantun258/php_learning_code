<?php

$file = "myWrite.txt";

$fileHandlar = fopen($file,"w");
fwrite($fileHandlar,"I Love Mon.");
fclose($fileHandlar);