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

<body>
  <h1 class="m-5">Data Simpan</h1>
  <div style="width:100%;justify-content: center;align-items: center;padding: 20px;">
    <h1>Tambah Simpanan </h1>
    <a href="tambah.php"><button type="button" class="btn btn-primary">tambah Simpanan</button></a>
    <table class="table w-50 mt-5">
      <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">No_simpan</th>
          <th scope="col">tanggal</th>
          <th scope="col">No anggota</th>
          <th scope="col">jumlah simpan</th>
          <th scope="col">kode kasir</th>
          <th scope="col">option</th>
        </tr>
      </thead>
      <tbody>
        <?php
include "../koneksi.php";
$no = 1;
$data = mysqli_query($koneksi,"select * from tblsimpan");
while($d = mysqli_fetch_array($data)){
?>
        <tr>
          <td><?php echo $no++; ?></td>

          <td><?php echo $d["no_simpan"]; ?></td>
          <td><?php echo $d["tanggal"]; ?></td>
          <td><?php echo $d["no_anggota"]; ?></td>
          <td><?php echo $d["jml_simpan"]; ?></td>
          <td><?php echo $d["kode_kasir"]; ?></td>

          <td>
            <a href="edit.php?no_simpan=<?php echo $d["no_simpan"]; ?>">
              <button type="button" class="btn btn-warning">edit</button>
            </a>
            <a href="hapus.php?no_simpan=<?php echo $d["no_simpan"]; ?>">
              <button type="button" class="btn btn-danger">delete</button>
            </a>
          </td>
        </tr>
      </tbody>
      <?php
    }
    ?>
    </table>




  </div>

</body>

</html>