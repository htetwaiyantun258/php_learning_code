<?php
$num = 5000000;
$city = "Yangon";
$val = 50.5;

printf("There are %u of people in %s. Double value is %f",$num,$city,$val);

$file = "testA.txt";
$handler = fopen($file,'w');
fprintf($handler,"There are %u of people in %s. Double value is %f.",$num,$city,$val);