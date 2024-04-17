<?php
include_once "brgElektronik.php";

class KipasAngin implements BarangElektronik{
    public function beroperasi(): void{
        echo "Berputar";
    }
    public function berhenti(): void{
        echo "Berhenti Berputar";
    }
}
?>