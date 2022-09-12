<?php

$val = 528;
$num = 1500;
$var =function() use ($val) {
    echo "I am closure function {$val} \n";
};

$var();

function done($val){
    $val();
}

done(function () use ($num){
echo $num;
});


//global variable access use {$val}  in closure;