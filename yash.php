<?php

$yas = 25;


if ($yas >= 0 && $yas <= 12) {
    echo "Siz uşaqsınız";

} elseif ($yas >= 13 && $yas <= 19) {
    echo "Siz yeniyetməsiniz";

} elseif ($yas >= 20 && $yas <= 35) {
    echo "Siz gəncsiniz";

} elseif ($yas >= 36 && $yas <= 50) {
    echo "Siz orta yaşlısınız";

} elseif ($yas >= 51 && $yas <= 64) {
    echo "Siz yaşlısınız";

} elseif ($yas >= 65) {
    echo "Siz qocasınız";

} else {
    echo "Duzgun yaş daxil edin.";
}
?>