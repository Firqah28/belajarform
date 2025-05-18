<?php
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pelajaran = $_POST['pelajaran'];

mysqli_query($koneksi, "INSERT INTO guru VALUES('', '$nip', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp', '$pelajaran')");
header("location:index.php?pesan=insert");
?>
