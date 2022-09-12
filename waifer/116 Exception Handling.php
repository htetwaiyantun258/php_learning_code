<?php

// $file = "mine.txt";

// if(file_exists($file)){
//     echo "File Exist";
// }else{
//     exit("File not Exist");
//     // echo "File not Exist";
//     echo "Hello";
// }

$file = "mind.txt";

try{
    if(file_exists($file)){
        echo "we got file";

    }else{
        throw new Exception("File Not Sir");
    }
}catch(Exception $e){
    die($e->getMessage());
}
echo "<br>Hello Waifer";