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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"> status :  <?php echo $_GET['pesan'];?></li>
        </ol>
      </nav>
    <div class="container-sm" style="justify-content: center;display: flex;
    height: 70vw;">
        <form action="cek_login.php" method="post">
            <div class="form-group " style="margin-top: 15vw;width: 300px;">
              <label for="exampleInputEmail1">nama </label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_kasir">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password_kasir">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  
</body>

</html>