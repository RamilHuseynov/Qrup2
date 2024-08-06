<?php
class Car{

    public $name = "BMW";
    public $surname = "Masin";


    public $num1;
    public $num2;

    public function sum($x,$y){
       // return $x+$y;
       return $this ->num1+$this->num2;
    }
    public function concat(){
        return $this->name." ".$this->surname;
    }
}
$car = new Car();
//var_dump($car);
echo $car->concat();

$car->num1=5;
$car->num2=6;
echo $car->sum(3,3);

