<?php

$a=10;
$b = 5;
$emeliyyyat = "+";


switch($emeliyyyat){
        case "+":
        echo "netice: " . ($a + $b);
        break;
        case "-":
            echo "netice: " . ($a - $b);
            break;
        case "*":
            echo "netice: " . ($a * $b);
            break;
        case "/":
            if ($b != 0) {
                echo "netice: " . ($a / $b);
            } else {
                echo "sifira bolme yoxdur!";
            }
            break;
        default:
            echo "sehv emeliyyat!";
    }

?>