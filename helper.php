<?php
function concat($name,$surname){
    $full_name = $name ." " .$surname;

    return $full_name;
}
echo concat("Ramil","Huseynov");

?>