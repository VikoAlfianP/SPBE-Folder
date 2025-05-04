<?php
include '../config/database.php';

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis = $_POST['jenis_layanan'];
$keperluan = $_POST['keperluan'];

$query = "INSERT INTO layanan (nama, nik, jenis_layanan, keperluan) 
          VALUES ('$nama', '$nik', '$jenis', '$keperluan')";

if (mysqli_query($conn, $query)) {
    echo "Pengajuan berhasil. <a href='../index.php'>Kembali ke Dashboard</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
