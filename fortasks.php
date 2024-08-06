<?php

// $number =3;
// for($i = 1; $i<=10; $i++){
//     echo $number. "x". $i ."=".($number*$i)."<br>";
// }

$num = 3;
$factorial = 1;
for($i = 1; $i<=$num; $i++){
     $factorial*=$i;
     //$factorial = $factorial * $i;
}
echo "Number: ".$factorial."<br";
?>