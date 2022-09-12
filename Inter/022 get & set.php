<?php


class main
{
    public  $num = "Kyaw Zin ";
    public function __get($var)
    {
        echo "get don't work!";
    }
    public function click()
    {
        echo "You can click everyday./";
    }
    
    public function __isset($name)
    {
        echo "Yes I have function";
    }
}
$getObj = new main();
$getObj->click();
echo isset($getObj->name) ? "Yes I have property." : "no property.";