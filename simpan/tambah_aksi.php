<?php
// koneksi database
include "../koneksi.php";

// menangkap data yang di kirim dari form
$no_simpan= $_POST['no_simpan'];
$tanggal = $_POST['tanggal'];
$no_anggota = $_POST['no_anggota'];
$jml_simpan = $_POST['jml_simpan'];
$kode_kasir = $_POST['kode_kasir'];
// menginput data ke database
mysqli_query($koneksi,"insert into tblsimpan values('$no_simpan','$tanggal','$no_anggota','$jml_simpan','$kode_kasir')");


// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

 