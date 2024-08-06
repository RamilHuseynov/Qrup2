<?php
$month = "June";

switch ($month) {
    case "December":
    case "January":
    case "February":
        echo "Winter";
        break;

    case "March":
    case "April":
    case "May":
        echo "Spring";
        break;

    case "June":
    case "July":
    case "August":
        echo "Summer";
        break;
        
    case "September":
    case "October":
    case "November":
        echo "Autmn";
        break;

    default:
        echo "Error!";
}
?>
