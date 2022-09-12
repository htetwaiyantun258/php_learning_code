<?php


class Private_School{
    private $schoolName = "School Name";

    public function Setter($changeName){
        $this->schoolName = $changeName;
    }
    public function getter(){
        return $this->schoolName;
    }
}

$SchoolOne = new Private_School();
$SchoolOne->Setter("Success Private School");
echo $SchoolOne->getter();
