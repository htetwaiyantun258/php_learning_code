<?php

function tryIt($num){
    echo $num;
}

$num = 20;
//tryIt($num);

function multiFun($num1,$num2,$num3){
    echo ($num1 * $num2) + $num3;
}

//multiFun(30,2,3);


function defaultFun($num = 2){
    echo $num;
}

defaultFun(3);