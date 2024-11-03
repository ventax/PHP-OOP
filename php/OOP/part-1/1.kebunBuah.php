<?php
include '1.buah.php';
$kebunBuah = [];
$jeruk = new buah();
$rambutan = new buah();
$anggur = new buah();

$jeruk->nama = 'Jeruk';
$jeruk->rasa = 'Manis';
$rambutan->nama = 'Rambutan';
$rambutan->rasa = 'Asam';
$anggur->nama = 'Anggur';
$anggur->rasa = 'Manis';

echo '<pre>';
print_r($jeruk);
print_r($rambutan);
print_r($anggur);
echo '</pre>';

