<?php





class People
{   
    public $name = "Min Nay";
    public function __toString()
    {
        return "This class have no properties or method!<hr>";
    }
    public function __invoke()
    {
        echo "Yor are trying to call object as Method";
    }
    public function __sleep()
    {
        echo "My name is sleep magic method!" . "<br>";
        return [];
    }
    public function __wakeup()
    {
        echo "My  is wakeup magic method!" . "<br>";
    }
    public function __clone()
    {
        echo "My name is clone ! clone !";
    }
}
$obj = new People();
$Ar = serialize($obj);
$Ar = unserialize($Ar);

$objOne = new People();
echo $objOne();
$objclone = clone $objOne;
echo $objclone->name;