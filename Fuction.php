<?php
//yalniz biri olmalidir. ya include yada require(vacibler db.php meselen)
//include 'helper.php';
require 'helper.php';
//echo concat("Ramil","Huseynov");




//void function
function myMessage()
{
    echo "Hello world!";
}
myMessage();

// //geriye deyer donderir
// function sum($a,$b)
// {
//     return $a+$b;
// }
// echo sum(4,10);


function test($a){
     if ($a%2==0){
        return $a." cutdur";
     }else {
        return $a." tekdir";
     };
}
echo test(5);



$name = "Alice";
function greet($name) {
    echo "Hello, " . $name . "!";
}

greet($name);