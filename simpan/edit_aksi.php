<?php

// koneksi database
include "../koneksi.php";

// menangkap data yang di kirim dari form
$no_simpan =$_POST["no_simpan"];
$tanggal =$_POST["tanggal"];
$no_anggota =$_POST["no_anggota"];
$jml_simpan =$_POST["jml_simpan"];
$kode_kasir =$_POST["kode_kasir"];



// update data ke database

mysqli_query($koneksi," UPDATE tblsimpan SET no_simpan ='$no_simpan',tanggal='$tanggal',no_anggota='$no_anggota',jml_simpan='$jml_simpan',kode_kasir=$kode_kasir WHERE no_simpan=$no_simpan");


// mengalihkan halaman kembali ke index.php
header('location:index.php')

?>