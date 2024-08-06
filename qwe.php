<?php
 class Animal
{
     public function eat(){
            echo "eating";
     }
    public function makeSound(){
            echo "sound";
    }
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