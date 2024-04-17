<?php
include_once "brgElektronik.php";

class Saklar{
    private BarangElektronik $item;
    private $keaktifan = false;
    
    public function __construct(BarangElektronik $item){
        $this->item = $item;
    }
    public function berubah() {
        $this->keaktifan = !$this->keaktifan;
        if ($this->keaktifan) {
            $this->item->beroperasi();
        } else {
            $this->item->berhenti();
        }
    }
}
?>