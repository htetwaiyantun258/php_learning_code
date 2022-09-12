<?php

$val = 20;
$num = ["1"=>"one", "2"=>"two", "3"=>"three"];

// $fonky = ;

array_walk($num,function($value,$key) use (&$val){
    $val = ++$val;
    echo "Key is ". $key . " and value is ". $value." current value is {$val}". "\n";
});
 
 