<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_Buku = $_GET['ID_Buku'];
// query SQL untuk insert data
$query="DELETE FROM tb_toko WHERE ID_Buku='$ID_Buku'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    $result;
    echo "<script>alert('Buku berhasil dihapus');location='index.php';</script>";
}
// mengalihkan ke halaman index.php
header("location:index.php");

?>