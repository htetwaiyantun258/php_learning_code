<?php

 echo "append";
$file="mind.txt";
$fileOpen=fopen($file,'a');
fwrite($fileOpen,"If you think you are too small to make a difference, try sleeping with a mosquito.");
fclose($fileOpen);






?>