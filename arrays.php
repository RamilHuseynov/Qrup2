<?php
$arr = array("red", "green","black","yellow");
$arr2 = ["red2", "green2","black2","yellow2"];
$arr2  [2] = "blue";

array_push($arr,"white");


foreach ($arr as $x) {
    echo "$x <br>";}

print_r($arr);
print_r($arr2);

echo $arr[0].$arr[1].$arr[2].$arr[3];

var_dump($arr2);


$phones = [
    "iPhone" => ["iPhone 12", "iPhone 13", "iPhone 14"],
    "Samsung" => ["Galaxy S21", "Galaxy S22", "Galaxy S23"]
];

print_r($phones);

echo "<br><br>";

// Iterate over the array and print each brand and its models
foreach ($phones as $brand => $models) {
    echo "Brand: " . $brand . "<br>";
    echo "Models: <br>";
    foreach ($models as $model) {
        echo "- " . $model . "<br>";
    }
    echo "<br>";
}
?>