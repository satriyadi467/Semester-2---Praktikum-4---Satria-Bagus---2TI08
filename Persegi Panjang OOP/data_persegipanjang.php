<?php
    require_once ('class_persegipanjang.php');

    $persegipanjang = new persegi_panjang(25,50);

    echo '<br>Luas Persegi Panjang : '.$persegipanjang->getLuas();
    echo '<br>Keliling Persegi Panjang : '.$persegipanjang->getKeliling();
?>