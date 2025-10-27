<?php
$buah = "apel";
$warna = "hijau";

$nama = $_GET['nama'] ?? 'Merapi';
$alamat = $_GET['alamat'] ?? 'Yogyakarta';

echo "Nama gunung adalah Gunung $nama beralamat di $alamat";
?>
