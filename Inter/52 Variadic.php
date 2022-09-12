<?php


function doIt(...$var){
    echo $var[1];
}

// doIt("one");
// echo "<hr>";

// doIt("one","two");
// echo "<hr>";


doIt(["one","two","three"],"my name is tun tun");
