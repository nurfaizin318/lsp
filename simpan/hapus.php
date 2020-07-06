<?php
// koneksi database
include "../koneksi.php";

// menangkap data id yang di kirim dari url
$no_simpan = $_GET["no_simpan"];

// menghapus data dari database
mysqli_query($koneksi," delete from tblsimpan where no_simpan='$no_simpan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

