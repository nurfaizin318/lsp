<?php
// koneksi database
include "../koneksi.php";

// menangkap data yang di kirim dari form
$no_anggota= $_POST['no_anggota'];
$nama = $_POST['nama'];
$wajib = $_POST['wajib'];
$pokok = $_POST['pokok'];
$saldo = $_POST['saldo'];
// menginput data ke database
mysqli_query($koneksi,"insert into tblanggota values('$no_anggota','$nama','$wajib','$pokok','$saldo')");


// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

 