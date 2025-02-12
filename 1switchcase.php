<?php
$warna = "merah";

switch ($warna) {
    case "merah":
        echo "Berhenti!\n";
        break;
    case "kuning":
        echo "Siap-siap!\n";
        break;
    case "hijau":
        echo "jalan!\n"; 
        break;   
    default:
        echo "Warna tidak valid!\n";
}