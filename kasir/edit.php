<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 

?>
<body >
<?php
include "../koneksi.php";
$kode_kasir = $_GET["kode_kasir"];
$data = mysqli_query($koneksi," SELECT * FROM tblkasir WHERE kode_kasir='$kode_kasir'");

while($d = mysqli_fetch_array($data)){
?>
<div class="jumbotron">
  <h1 class="display-4">edit kasir!</h1>
  <hr class="my-4">
  <form action="edit_aksi.php" method="post">
             <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">Kode kasir</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="kode_kasir" value="<?php echo $d['kode_kasir'] ?>">
             
            </div>
            <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kasir" value="<?php echo $d['nama_kasir'] ?>">
             
            </div>
            <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">password</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  name="password_kasir" value="<?php echo $d['password_kasir'] ?>">
             
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</div>
<?php
}
?>
</body>

</html>