<?php
include_once "vgm.php";

class WhatsApp implements VideoGroupManager {
    public function chat() {
        echo "P <br>";
    }

    public function sendPhotosAndVideos() {
        echo "Upload foto dan video <br>";
    }

    public function callGroupVideo() {
        echo "Berbunyi kecuali di silent <br>";
    }
}

?>
