<?php
class Car{
    public $brand,$model,$price,$spares,$available;
    public function __construct()
    {
        
    }
}
class Driver{
    public $name,$age,$family,$hourlyRate,$martialStatus;

    public function setName($name){
        $this->$name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setAge(int $age){
        $this->$age = $age;
    }
    public function getAge() :int{
        return $this->age;
    }
    public function setFamily(array $family){
        $this->family = $family;

    }
    public function getFamily() : array{

       return $this->family ;
    }

    public function setHourlyRate(float $hourlyRate){
        $this->$hourlyRate;

    }
    public function getHourlyRate() : float{
        return $this->hourlyRate;
    }
    public function setMartialStatus(bool $martialStatus){
        $this->martialStatus = $martialStatus;
    }
    public function getMartialStatus() : bool {
        return $this->martialStatus;
    }

}

$dmgmg =  new Driver();



