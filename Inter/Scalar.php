<?php





class Index{
    public function showResult(array $num) : array{
        var_dump($num);
        
        return $num;
    }
}

$ind = new Index();
$ind->showResult([2,3,4,5,6,7,8,9]);

//lesson 40 and lesson 41