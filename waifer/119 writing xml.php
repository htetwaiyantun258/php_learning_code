<?php

$ary = array(
    "name"=>"htet wai",
    "age"=>23,
    "subject"=>"php",
    "location"=>"Yangon"
);
$str = "";
$str .= "<code>";
foreach($ary as $key=>$val){
    $str .="<" . $key . ">";
    $str .= $val;
    $str .="</" .$key . ">";
}
$str .= "</code>";

echo $str;
$hand = fopen('xmlfile.txt','w');
fprintf($hand,'%s',$str);