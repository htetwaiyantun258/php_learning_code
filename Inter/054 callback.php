<?php

class Index{
    public function read($fun){
        $page = 30;
        for($i =1; $i < $page; $i++){
            echo "reading book $i \n";
        }

        $this->$fun($i);
        
    }

    public function closeBook($totalpage){
        echo "end the reading book $totalpage";
    }
    public function exit(){
        echo "reading book program exits";
    }
}

$ind = new Index();

$ind->read("exit");