<?php




class Test{
    public $student_name = "Wai Yan";
    public function result(){
        echo $this->student_name ."is good student";
    }

}
$obj = new Test();
// echo $obj->student_name;
echo $obj->result();




?>