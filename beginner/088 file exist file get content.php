<?php


    function readMyFile($filename){
       if(file_exists($filename)){
        $handler = fopen($filename,"r");
        $size = filesize($filename);
        $data = fread($handler,$size);
        return $data;
       }else{
           echo "File not found";
       }
    }

  echo  readMyFile("hee.txt");


  function fileGet($filename){
      if(file_exists($filename)){
          $data = file_get_contents($filename);
          return $data;
      }else{
          echo "No file";
      }
  }

  echo fileGet("hehe.txt");
?>