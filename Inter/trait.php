<?php
interface ParentInterface
{
    public function family();
    public function walk();
    public function sleep();
    public function eatting();
    public function drive();
    public function Healthy();
}
trait parent_fun
{
    public function family()
    {
        echo "My Family!";
    }
    public function walk()
    {

    }
    public function sleep()
    {

    }
    public function eatting()
    {

    }
    public function drive()
    {
        echo "I am driver.";

    }
    public function Healthy()
    {

    }
}
class ParentOne implements ParentInterface
{

    public $name = "Min Nay";
    use parent_fun;
}
$parent = new ParentOne();
$parent->drive();

trait Member
{

    public function study()
    {
        echo "I am studying university.";
    }
    public function learning()
    {
        echo "I am life long learing.";
    }
    public function holiday()
    {
        echo "Holiday !!!!!!";
    }

}

class childMember extends ParentOne
{
    use Member;

}
$childMemberOne = new childMember();
echo $childMemberOne->study();
