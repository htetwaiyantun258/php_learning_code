<?php

// function readMyFile($fileName){
//     if(file_exists($fileName)){
//         $h = fopen($fileName,'r');
//         $size = filesize($fileName);
//         $data = fread($h,$size);
//         fclose($h);
//         return $data;
//     }else{
//         echo "File not found!";
//     }
// }
// echo ReadMyFile('taylay.txt');

function read_file($fileName){
    if(file_exists($fileName)){
        $data = file_get_contents($fileName);
        return $data;
    }else{
        echo "file not found!";
    }
}
echo read_file('test.txt');