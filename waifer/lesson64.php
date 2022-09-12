<?php

function doIt(){
    echo "Love You Too!";

}

$var = "doIt";



// $result = function_exists($var) ? "True" : "False";

// echo $result;

function check($var){
    if(function_exists($var)){
       echo "Yes Function";
    }
    else{
        echo "No Function";
    }
}
check($var);
?>