<?php
include '1.buah.php';
$tamanBunga = [];
$mawar = new Bunga();
$lavender = new Bunga();
$dandelion = new Bunga();

$mawar->nama = 'Mawar';
$mawar->warna = 'Biru';
$lavender->nama = 'Lavender';
$lavender->warna = 'Ungu';
$dandelion->nama = 'Dandelion';
$dandelion->warna = 'Putih';
echo '<pre>';
print_r($mawar);
print_r($lavender);
print_r($dandelion);
echo '</pre>';
