<?php
include "koneksi.php";
// menangkap data yang di kirim dari form
$ID_Penerbit = $_POST["ID_Penerbit"];
$Nama = $_POST["Nama"];
$Alamat = $_POST["Alamat"];
$Kota = $_POST["Kota"];
$Telepon = $_POST["Telepon"];

// menginput data ke database
$sql = "INSERT INTO tb_penerbit (ID_Penerbit,Nama, Alamat, Kota, Telepon)
VALUES('$ID_Penerbit','$Nama','$Alamat','$Kota','$Telepon')";
$query = mysqli_query($koneksi, $sql);
// mengalihkan halaman kembali ke Beranda
header("location:pengadaan.php");