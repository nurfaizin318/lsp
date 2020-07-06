<?php

// koneksi database
include "../koneksi.php";

// menangkap data yang di kirim dari form
$kode_kasir =$_POST["kode_kasir"];
$nama_kasir =$_POST["nama_kasir"];
$password_kasir =$_POST["password_kasir"];


    // update data ke database

mysqli_query($koneksi," UPDATE tblkasir SET kode_kasir =$kode_kasir,nama_kasir='$nama_kasir',password_kasir='$password_kasir' WHERE kode_kasir=$kode_kasir");


// mengalihkan halaman kembali ke index.php
header('location:index.php')

?>