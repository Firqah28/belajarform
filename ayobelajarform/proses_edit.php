<?php
include 'koneksi.php';
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pelajaran = $_POST['pelajaran'];

$query = mysqli_query($koneksi, "UPDATE guru SET nip='$nip', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_hp='$no_hp', pelajaran='$pelajaran' WHERE id='$id'");

// Firqah
if ($query) {
    header('Location: index.php?pesan=update'); // 230210501021
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi); 
}
?>
