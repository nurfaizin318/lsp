<?php
// koneksi database
include "../koneksi.php";

// menangkap data id yang di kirim dari url
$kode_kasir = $_GET["kode_kasir"];

// menghapus data dari database
mysqli_query($koneksi," delete from tblkasir where kode_kasir='$kode_kasir'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

