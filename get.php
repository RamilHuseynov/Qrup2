<?php

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $dogumTarihi = $_POST["dtarix"];

    $dogumTarihiObj = new DateTime($dogumTarihi);
    $indi = new DateTime();
    $yas = $indi->diff($dogumTarihiObj)->y;

    echo "<p>Salam $ad $soyad, sizin yaşınız $yas.</p>";


?>