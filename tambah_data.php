<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    input{
        width:250px;
    }
    .container{
        margin:50px;
    }
    </style>
  </head>
  <body>
  <br>
  <div class="container">
    <h3><center>Tambah Data Barang</center></h3>
    <hr />
    <form method="post" action="proses_barang.php?action=add">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama Barang</th>
      <th scope="col">:</th>
      <th><input type="text" name="nama_barang"/></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Stok</th>
      <td>:</td>
      <td><input type="text" name="stok"/></td>
    </tr>
  </tbody>
  <tr>
      <th scope="row">Harga Beli</th>
      <td>:</td>
      <td><input type="text" name="harga_beli"/></td>
    </tr>
    <tr>
      <th scope="row">Harga Jual</th>
      <td>:</td>
      <td><input type="text" name="harga_jual"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="tombol" class="btn btn-success" value="Simpan"/></td>
    </tr>
</table>
</div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>