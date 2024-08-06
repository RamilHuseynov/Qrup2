<?php
session_start();
//session_destroy();
//print_r($_SESSION["login"]);

    if(!isset($_SESSION["login"]) ) {
        echo "Zehmet olmasa login ol";
    } else {
        echo "Xoşgeldiniz";
    }

?>