<?php


class Getter{
    private $school = "Pinlon Rose";

    public function getter(){
        return $this->school;
    }
}

$schoolName = new Getter();
echo $schoolName->getter();
