<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$ID_Penerbit = $_POST['ID_Penerbit'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$Telepon = $_POST['Telepon'];

// update data ke database
mysqli_query($koneksi,"update tb_penerbit set Nama='$Nama',
Alamat='$Alamat', Kota='$kota', Telepon='$Telepon' where ID_Penerbit='$ID_Penerbit'");
// mengalihkan halaman kembali ke index.php
header("location:pengadaan.php");

?>