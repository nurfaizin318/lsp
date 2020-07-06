<?php 

session_start();

include "koneksi.php";

$username = $_POST["nama_kasir"];
$password =$_POST["password_kasir"];

$data = mysqli_query($koneksi," select * from tblkasir  where nama_kasir = '$username' and password_kasir = '$password' ");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION["username"]=$username;
    $_SESSION["status"]= "login";

    header('location:home.php');
}else{
   header("location:index.php?pesan=gagal");
};
 
?>