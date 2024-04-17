<?php
include_once "mobil.php";
include_once "mobilListrik.php";

$mobilbbm = new Mobil();
$mobillistrik = new MobilListrik();

echo "Mobil Yang menggunakan BBM <br>";
$mobilbbm->menggunakanBBM();

echo "<br>Mobil Yang menggunakan Baterai <br>";
$mobillistrik->menggunakanBaterai();

?>