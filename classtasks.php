<?php

// $arr = array("Ali", "Zaur","Veli","Vuqar","Ehtiram","Ugur","Ramin");
// function FourLetters($arr) {
//     $newArr=[];

//     foreach($arr as $value){
//         if(strlen($value)==4){
//             echo $value;
//             array_push($newArr, $value);
//         }
//     }
//     return $newArr;
    
// }
// $result = FourLetters($arr);

// print_r($result);



//Task: Create a nested array of students with their grades and print each student's name and grade.

$students = [
    ["name" => "Ali", "grade" => "A"],
    ["name" => "Babek", "grade" => "B"],
    ["name" => "Cemil", "grade" => "C"]
];

foreach ($students as $student) {
    echo $student["name"] . " aldi " . $student["grade"] . "<br>";
}




?>