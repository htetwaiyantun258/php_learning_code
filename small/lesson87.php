<?php

function creatFile($fileName){
    $h = fopen($fileName,'w');
   
    fclose($h);
}

creatFile("toetet.txt");

function writeFile($fileName,$data){
    $h = fopen($fileName,'w');
    fwrite($h,$data);
    fclose($h);
}

writeFile("toetet.txt","I am good developer.");

function appendFile($fileName,$data){
    $h = fopen($fileName,'a');
    fwrite($h,$data);
    fclose($h);
}

appendFile("momo.txt","I love Mogilay.");

function readMyFile($fileName){
    $h = fopen($fileName,'r');
    $size = filesize($fileName);
    $data = fread($h,$size);
    fclose($h);
    return $data;
} 

echo readMyFile('momo.txt');