<?php

$bigAry=array(
    array("one","two","three","four"),
    array("five","six","seven"),
    array("eight","nine")
);

$car=array("first"=>"Toyota","second"=>"BMW","third"=>"Suzuki");


foreach($bigAry as $item){
    print_r($item);
    echo "<br>";
    echo "\n";
}

foreach($car as $key=>$value){
    // print_r($value);
    echo "Key is=> " . $key . "   Value is => ".$value;
    echo "\n";

}






?>