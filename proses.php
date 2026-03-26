<?php
require_once "class/Mahasiswa.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

$mhs = new Mahasiswa($nama, $nim, $hp, $alamat);

echo $mhs->tampilkanData();
?>