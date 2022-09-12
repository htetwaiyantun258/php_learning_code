<?php


class Member{
    public $name = "Min Min";

    public function friend(){
        echo "Nay Nay";
    }

    public function __destruct()
    {
        echo "I am destruct!";
    }
}
class Golden_Member extends Member{
    public function friend()
    {
        echo "Nay Min";
    }
}

$goldMember = new Golden_Member();
$goldMember->friend();