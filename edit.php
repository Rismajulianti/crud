<?php 	
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
	$data_barang = $db->get_by_id($id_barang);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Barang</h3>
<hr/>
<form method="post" action="proses_barang.php?action=update">
<input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Barang</th>
      <th scope="col">:</th>
      <th scope="col"><input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"/></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Stok</th>
      <td>:</td>
      <td><input type="text" name="stok" value="<?php echo $data_barang['stok']; ?>"/></td>
    </tr>
    <tr>
      <th scope="row">Harga Beli</th>
      <td>:</td>
      <td><input type="text" name="harga_beli" value="<?php echo $data_barang['harga_beli']; ?>"/></td>
    </tr>
    <tr>
      <th scope="row">Harga Jual</th>
      <td>:</td>
      <td><input type="text" name="harga_jual" value="<?php echo $data_barang['harga_jual']; ?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit"  class="btn btn-success" name="tombol" value="Update"/></td>
    </tr>
    </tbody>
    </table>
</form>
</body>
</html>