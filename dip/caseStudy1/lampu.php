<?php
include_once "brgElektronik.php";

class Lampu implements BarangElektronik{
    public function beroperasi(): void{
        echo "Menyala Abangku";
    }
    public function berhenti(): void{
        echo "Padam";
    }
}
?>