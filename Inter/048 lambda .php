<?php


function doIt($p1,$p2,$p3){
    $total = $p1+$p2;
    $p3($total);
}
doIt(2,3,function($var){
    echo "I am lambda==> {$var}";
});


