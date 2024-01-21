<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_Penerbit = $_GET['ID_Penerbit'];
// query SQL untuk insert data
$query="DELETE FROM tb_penerbit WHERE ID_Penerbit='$ID_Penerbit'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    $result;
    echo "<script>alert('Buku berhasil dihapus');location='pengadaan.php';</script>";
}
// mengalihkan ke halaman index.php
header("location:pengadaan.php");
?>