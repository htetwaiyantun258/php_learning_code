<?php


class Test{
    public function showResult(array $num){
        var_dump($num);

    }
}
$ind = new Test();

$ind->showResult(["id1"=>"apple","id2"=>"orange"]);

class testOne{
    public function show(Test $num){
        var_dump($num);
    }
}

$testOne = new testOne();
$testOne->show($ind);