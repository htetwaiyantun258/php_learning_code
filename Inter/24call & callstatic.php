<?php

class Index
{
    public $name;
    public function __call($method, $arguments)
    {
        echo "Your are tying to call method {$method} with values of <hr>";
    }
    public function hehe($name)
    {
        echo $this->name = $name;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "you are calling none  static method{$name}";
    }
    public static function hey(){
        echo "I am hey static";
    }
}
$obj = new Index();
echo $obj->hehe("may nyo");
Index::hey();

