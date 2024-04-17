<?php
include_once "view.php";

$mahasiswa = new Mahasiswa("2205007", "Bambang Yudoyono");
$viewmhs = new MahasiswaView();
echo "Informasi Mahasiswa :";
echo "<br>";
$viewmhs->showMahasiswa($mahasiswa);
?>
