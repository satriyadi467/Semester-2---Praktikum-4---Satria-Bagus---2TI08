<?php

require_once ('class_lingkaran.php');

echo "Nilai PHI : ".lingkaran::PHI . "<br>";
$lingkaran1 = new lingkaran(28);
$lingkaran2 =new lingkaran(35);

echo 'Jari jari=', $lingkaran1->jari2;
echo "<br>Luas Lingkaran 1: ".$lingkaran1->getLuas();
echo "<br>Luas lingkaran 2: ".$lingkaran2->getLuas();

echo "<hr>";

echo "Keliling Lingkaran 1: ".$lingkaran1->getKeliling(). "<br>";
echo "Keliling Lingkaran 2: ".$lingkaran2->getKeliling(). "<br>";

?>