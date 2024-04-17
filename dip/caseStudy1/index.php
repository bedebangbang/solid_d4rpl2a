<?php
include_once "kipas.php";
include_once "lampu.php";
include_once "saklar.php";



$kipas = new KipasAngin();
$lampu = new Lampu();

$saklarKipas = new Saklar($kipas);
$saklarLampu = new Saklar($lampu);

echo"Kipas : <br>";
$saklarKipas->berubah();

echo"<br>";

echo"Lampu : <br>";
$saklarLampu->berubah();
?>