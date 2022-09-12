<?php

function doIt(...$var){
    foreach($var as $key){
        echo $key . "\n";
    }

    echo $var[0];
}

doIt("one","Two");