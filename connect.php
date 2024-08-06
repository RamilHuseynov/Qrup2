<?php
session_start();

$_SESSION["login"]="logined";

echo "Welcome ".$_POST["mail"];


?>