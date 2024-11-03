<?php
include 'hewan.php';
$hewan = new Hewan(nama: "T-Rex", habitat: "Hutan dan dataran rendah", warna: "Coklat", tahun:1889);
// cara ke 2
$stegosaurus = new Hewan();
$stegosaurus->nama = 'Stegosaurus';
$stegosaurus->habitat = 'Hutan';
$stegosaurus->warna = 'Abu-Abu';
$stegosaurus->tahun = 1877;
echo'<pre>';
print_r($hewan);
print_r($stegosaurus);
'</pre>';