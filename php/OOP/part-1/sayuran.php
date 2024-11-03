<?php
include 'sayur.php';
$sayur = new Sayur(nama: "Bayam",
 warna: 'Hijau',
 habitat: 'Tanah Kering',
 harga:3000
);

$tomat = new Sayur();
$tomat->nama = 'Tomat';
$tomat->warna = 'Merah';
$tomat->habitat = 'Tanah Kering';
$tomat->harga = 5000;

echo '<pre>';
print_r($sayur);
print_r($tomat);
echo '</pre>';