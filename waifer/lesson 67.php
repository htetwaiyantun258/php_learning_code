<?php


function stayFun(){
    $num = 0;
    $num++;
    echo $num;
}

stayFun();

echo "<hr>";

function staticFun(){
    STATIC $changeNum = 0;
    $changeNum++;
    echo $changeNum;
    echo "<hr>";

}

staticFun();
staticFun();
staticFun();

