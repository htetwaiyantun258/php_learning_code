<?php


$anFun = function (){
    echo "I am Mr. anonymous function!";

};

$anFun();

$num= 20;

$var = function(&$num){
    $num = 50;
    echo "This num value is $num";
};
echo $num ;
$var($num);
echo $num;
