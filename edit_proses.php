<?php 
// koneksi database 
include 'koneksi.php'; 
// menangkap data yang di kirim dari form 
$ID_Buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku']; 
$Harga = $_POST['Harga']; 
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];
// update data ke database 
mysqli_query($koneksi,"update tb_toko set Nama_Buku='$Nama_Buku', 
Harga='$Harga', Stok='$Stok', Kategori='$Kategori', Penerbit='$Penerbit' where ID_Buku='$ID_Buku'"); 
 
// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
 
?>