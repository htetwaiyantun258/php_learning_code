<?php

use Member as GlobalMember;

trait Member{
        var $name = "Mg Mg";
        public function click(){
            echo "you can click";
        }

}
trait diamon{
    var $piv_name = "name";
    public function action(){
        echo "you can real action";
    }
    public function quality_change(){
        echo "you can change quality change";
    }

    public function down(){
        echo "you can download!";
    }

}


class gold_member{

    use Member;
    public function click(){
        echo "you can click click";
    }
}



class diamon_member 
{
    use diamon;
    
}
$gMemberObj = new gold_member();
$gMemberObj->click();


//using obj diamon and trait using

// $dMemberObj = new diamon_member();
// $dMemberObj->quality_change();
// $dMemberObj->down();
