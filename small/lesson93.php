<?php



// $rand  = rand(1,6);
// echo $rand . "<br>";
// $end = getrandmax();
// echo $end . "<br>"; // max rand value = 2147483647
// $val_micro = microtime();
// echo $val_micro;
srand(microtime()*1000000);
echo rand() . "<br>";
echo mt_rand();