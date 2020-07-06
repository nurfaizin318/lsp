<?php
// koneksi database
include "../koneksi.php";

// menangkap data id yang di kirim dari url
$no_anggota = $_GET["no_anggota"];

// menghapus data dari database
mysqli_query($koneksi," delete from tblanggota where no_anggota='$no_anggota'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

