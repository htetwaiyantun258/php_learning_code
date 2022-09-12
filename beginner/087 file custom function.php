<?php

function myCreate($filename){
    $handlar  = fopen($filename,"w");
    fclose($handlar);
}

myCreate("meme.txt");

function writeFile($filename,$data){
    $h = fopen($filename,"w");
    fwrite($h,$data);
    fclose($h);
}
 writeFile("hehe.txt","I am hehe!");

function myAppend($filename,$data){
    $handlar = fopen($filename,"a");
    fwrite($handlar,$data);
    fclose($handlar);
}

// myAppend("hehe.txt","   I am Laughting!");



function readMyFile($filename){
    $handlar = fopen($filename,"r");
    $size = filesize($filename);
    $data = fread($handlar,$size);
    fclose($handlar);
    return $data;

}

echo readMyFile("myMemo.txt");
