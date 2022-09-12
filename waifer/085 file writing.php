<?php

$file="test.txt";
$fileOpen=fopen($file,'w');
fwrite($fileOpen,"Happiness is not something ready made. It comes from your own actions.
― Dalai Lama XIV");
fclose($fileOpen);








?>