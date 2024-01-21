<!DOCTYPE html>
<html>
<head>
<title>Form Edit Data</title>
<style>
fieldset {
width: 400px;
margin:auto;
}
</style>
</head>
<body>
<fieldset >
<!--Judul pada fieldset-->
<legend align="center">Edit Data Buku</legend>
<h3>Edit Data</h3>

<?php
include "koneksi.php";
$ID_Buku = $_GET['ID_Buku'];
$edit = mysqli_query($koneksi,"SELECT * FROM tb_toko WHERE ID_Buku='$ID_Buku'");
while ($row = mysqli_fetch_array($edit)) {
?>

<form method="post" action="edit_proses.php">
<table>
<tr>
<td>Nama_Buku</td>
<td>
<input type="hidden" name="ID_Buku" value="<?php echo $row['ID_Buku']; ?>">
<input type="text" name="Nama_Buku" value="<?php echo

$row['Nama_Buku']; ?>">

</td>
</tr>

<tr>
<td>Harga</td>
<td>
<input type="text" name="Harga" value="<?php echo $row['Harga']; ?>">
</td>
</tr>

<tr>
<td>Stok</td>
<td>
<input type="text" name="Stok" value="<?php echo $row['Stok']; ?>">
</td>
</tr>
<tr>
<td>Penerbit</td>
<td>
<input type="text" name="Penerbit" value="<?php echo $row['Penerbit']; ?>">
</td>
</tr>

<tr>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</fieldset>
</body>
</html>