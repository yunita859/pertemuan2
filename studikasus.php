<?php

echo"=====SLIP PERHITUNGAN GAJI KARYAWAN=====";
echo "<hr>";

//desc
// manager: 7juta
// supervisor: 5juta
// staff: 3juta 

// variabel
$jabatan = "manager";

$jam = 200;

if ($jabatan == "manager") {
    $gaji = 7000000;
} elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
} elseif ($jabatan == "staff") {
        $gaji = 3000000;}

if ($gaji < 3000000) {
    $pajak = 5;
} elseif ($gaji >= 3000000 && $gaji <= 5000000){
    $pajak = 10;
} elseif ($gaji >= 5000000){
    $pajak = 15;
}

//status
if ($jam > 200) {
    $bonus = ($jam - 200) * 20000;
} else {
    $bonus = 0;
}

//pajak
$hitung_pajak = ($pajak / 100) * $gaji;
$gaji_bersih = $gaji - $hitung_pajak + $bonus;

// perhitungan gaji bersih
echo "Jabatan = " . $jabatan . "<br>";
echo "Gaji Pokok =" . $gaji . "<br>";
echo "Pajak = ". $hitung_pajak . "<br>";
echo "Bonus = ". $bonus . "<br>";
echo"Gaji Bersih = ". $gaji_bersih . "<br>";
?>