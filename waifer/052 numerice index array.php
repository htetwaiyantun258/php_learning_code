<?php

    //index array //numeric array with
    $car=array("suzuki","BMW","Tesla");
    echo $car[2];
    echo "\n";





    $name=array();
    $name[0]="kyaw kyaw";
    $name[1]="Tun Tun";
    $name[2]="Min Min";
    echo $name[2];


    $book = array();
    $book[0] = "Marketing";
    $book[1] = "Data Science";
    $book[2] = "Digital Marketing";
    $book[3] = "Python Book";
    $book[4] = "Excel Advance";
    
    for($i =0; $i <= count($book); $i++){
            echo $book[$i];
    }