<?php

$cookie_name = "user";
$cookie_value = "Ramil Huseynov";
$cookie_expiry = time() + (86400*30);

setcookie($cookie_name, $cookie_value, $cookie_expiry, "/");

echo "Cookie yaradildi!";

echo "<br>","<br>";

if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie deyeri: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie tapilmadi";
}



?>