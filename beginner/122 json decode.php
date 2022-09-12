<?php

$file = "she.json";
$handler = fopen($file,"r");
$json = fread($handler,filesize($file));

$arys = json_decode($json);
foreach($arys as $ary){
    foreach($ary as $val){
        echo $val ;
    }
    echo "<br>";
    
}