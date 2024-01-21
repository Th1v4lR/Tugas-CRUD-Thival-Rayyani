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
<center><h1>Halaman Pengadaan</h1></center>

<fieldset >
<!--Judul pada fieldset-->
<legend align="center">Data Penerbit</legend>
<center>||<a href="tambah_penerbit1.html">Tambah Penerbit</a>||</center>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Cari Penerbit : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>
</form>
<br>
<table class="tampilan_pengadaan"align="center">
<thead>
<tr>
<th>ID_Penerbit</th>
<th>Nama</th>
<th>Alamat</th>
<th>Kota</th>
<th>Telepon</th>
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
$query = "SELECT * FROM tb_penerbit WHERE ID_Penerbit like '%".$kata_cari."%' OR
Nama like '%".$kata_cari."%' ORDER BY ID_Penerbit ASC";
} else {
//jika tidak ada pencarian, default yang dijalankan query ini
$query = "SELECT * FROM tb_penerbit ORDER BY ID_Penerbit ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
//kalau ini melakukan foreach atau perulangan
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<td><?php echo $row['ID_Penerbit']; ?></td>
<td><?php echo $row['Nama']; ?></td>
<td><?php echo $row['Alamat']; ?></td>
<td><?php echo $row['Kota']; ?></td>
<td><?php echo $row['Telepon']; ?></td>



<!--Tambahan untuk opsi edit dan hapus-->
<td>
<a href="edit_pengadaan.php?ID_Penerbit=<?php echo $row['ID_Penerbit']; ?>">EDIT</a>
<a href="delete_penerbit.php?ID_Penerbit=<?php echo $row['ID_Penerbit']; ?>">HAPUS</a>
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