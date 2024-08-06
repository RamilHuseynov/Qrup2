<?php
// 1.Write a PHP class 'Rectangle' that has properties for length and width. 
// Implement methods to calculate the rectangle's area and perimeter.
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(12, 9);
echo "Area: " . $rectangle->getArea() . "</br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";

// 2.Write a PHP class called 'Circle' that has a radius property. 
// Implement methods to calculate the circle's area and circumference.

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(7);
echo "Area: " . $circle->getArea() . "</br>";
echo "Circumference: " . $circle->getCircumference() . "</br>";

//3.Class daxilinde static funksiyalar yaradin 2 reqemi toplasin, cixsin, vursun, bolsun
class Math {
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiply($num1, $num2) {
        return $num1 * $num2;
    }
}

$result1 = Math::add(4, 3);
$result2 = Math::subtract(14, 4);
$result3 = Math::multiply(8, 2);

echo "Addition: " . $result1 . "</br>";
echo "Subtraction: " . $result2 . "</br>";
echo "Multiplication: " . $result3 . "</br>";

//4.'eat()' ve 'makeSound()' kimi abstract methotlara sahip 'Animal' adlı bir PHP abstract class yazın. 
//Bu metotları uygulayan 'Dog', 'Cat' ve 'Bird' kimi alt classlar yaradin
abstract class Animal
{
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function eat()
    {
        echo "Dog is eating.</br>";
    }

    public function makeSound()
    {
        echo "Dog is barking.</br>";
    }
}

class Cat extends Animal
{
    public function eat()
    {
        echo "Cat is eating.</br>";
    }

    public function makeSound() {
        echo "Cat is meowing.</br>";
    }
}

class Bird extends Animal
 {
    public function eat()
    {
        echo "Bird is eating.</br>";
    }

    public function makeSound()
    {
        echo "Bird is chirping.</br>";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();

$cat = new Cat();
$cat->eat();
$cat->makeSound();

$bird = new Bird();
$bird->eat();
$bird->makeSound();


?>






?>