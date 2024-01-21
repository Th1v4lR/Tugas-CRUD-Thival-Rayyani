<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Thival R</title>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<title>Tampil Data</title>
<body>
<header>
    <nav align="left">
    <img src="image/logo11_1_95826.png" width="10%" style="margin-right: 5%;">
    <marquee><h2>Toko Thival Rayyani</h2></marquee>
        <a href="index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="pengadaan.php">Pengadaan</a>
    </nav>
</header>
<center><h1>Hello Admin Thival !!</h1></center>

<fieldset >
<!--Judul pada fieldset-->
<legend align="center">Data Toko</legend>
<center><h3>Pencarian Buku</h3></center>
<center>||<a href="tambah_form.html">Tambah Data</a>||</center>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Cari Buku : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>
</form>
<br>
<div class="table2">
<table class="tampilan_admin">
<thead>
<tr>
<th>ID_Buku</th>
<th>Kategori</th>
<th>Nama_Buku</th>
<th>Harga</th>
<th>Stok</th>
<th>Penerbit</th>
<!--Tambahan untuk opsi Update & Delete-->
<th>OPSI</th>
</tr>
</thead>
<tbody>
<?php
//untuk meinclude kan koneksi
include 'koneksi.php';
//jika kita klik cari, maka yang tampil query cari ini
if(isset($_GET['kata_cari'])) {
//menampung variabel kata_cari dari form pencarian
$kata_cari = $_GET['kata_cari'];
$query = "SELECT * FROM tb_toko WHERE ID_Buku like '%".$kata_cari."%' OR
Nama_Buku like '%".$kata_cari."%' ORDER BY ID_Buku ASC";
} else {
//jika tidak ada pencarian, default yang dijalankan query ini
$query = "SELECT * FROM tb_toko ORDER BY ID_Buku ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
//kalau ini melakukan foreach atau perulangan
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['ID_Buku']; ?></td>
<td><?php echo $row['Kategori']; ?></td>
<td><?php echo $row['Nama_Buku']; ?></td>
<td><?php echo $row['Harga']; ?></td>
<td><?php echo $row['Stok']; ?></td>
<td><?php echo $row['Penerbit']; ?></td>


<!--Tambahan untuk opsi edit dan hapus-->
<td>
<a href="edit_form.php?ID_Buku=<?php echo $row['ID_Buku']; ?>">EDIT</a>
<a href="delete_proses.php?ID_Buku=<?php echo $row['ID_Buku']; ?>">HAPUS</a>
</td>
</tr>

<?php
}
?>
</tbody>
</table>
</fieldset>
</body>
</html>