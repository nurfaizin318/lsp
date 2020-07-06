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
<div class="jumbotron">
  <h1 class="display-4">Tambah Simpanan!</h1>
  <hr class="my-4">
  <form action="tambah_aksi.php" method="post">
             <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">no_simpan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="no_simpan">
             
            </div>
            <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">tanggal</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tanggal">
             
            </div>
            <div class="form-group " style="width: 300px;">
              <label for="exampleInputEmail1">no anggota</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  name="no_anggota">
             
            </div>
            <div class="form-group" style="width: 300px;">
              <label for="exampleInputPassword1">jumlah simpan</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="jml_simpan">
            </div>
            <div class="form-group" style="width: 300px;">
              <label for="exampleInputPassword1">kode kasir</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="kode_kasir">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</div>
</body>

</html>