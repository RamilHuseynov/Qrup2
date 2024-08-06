<?php
//Exercise 1: Print a Single Line of Stars
for ($i = 0; $i < 5; $i++) {
    echo "*";
}

echo "<br>","<br>";
//Exercise 2: Print a Line of Stars with a Loop

for ($i = 0; $i < 10; $i++) {
    echo "* ";
}

echo "<br>","<br>";

//Exercise 3: Print a Single Column of Stars
for ($i = 0; $i < 5; $i++) {
    echo "*<br>";
}

echo "<br>","<br>";

//Exercise 4: Print a Triangle of Stars
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>","<br>";

//Exercise 5: Print an Inverted Triangle of Stars
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>","<br>";


//Exercise 6: Print a Square of Stars
$size = 4;
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>","<br>";


//Exercise 7: Print a Pyramid of Stars
$rows = 4;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>","<br>";

//Exercise 8: Print a Hollow Square of Stars
$size = 5;
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($i == 0 || $i == $size - 1 || $j == 0 || $j == $size - 1) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}
?>
