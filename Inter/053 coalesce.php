<?php

function read(...$var){
    echo $var[0] ?? "$var is null value.";
}

read(10);