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
<legend align="center">Edit Data Pengadaan</legend>
<h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $ID_Penerbit = $_GET['ID_Penerbit'];
    $edit = mysqli_query($koneksi,"SELECT * FROM tb_penerbit WHERE ID_Penerbit='$ID_Penerbit'");
    while ($row = mysqli_fetch_array($edit)) {
    ?>

    <form method="post" action="edit_proses2.php">
    <table>
    <tr>
        <td>Nama</td>
        <td>
        <input type="hidden" name="ID_Penerbit" value="<?php echo $row['ID_Penerbit']; ?>">
        <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>">
        </td>
        </tr>

        <tr>
        <td>Alamat</td>
        <td>
        <input type="text" name="Alamat" value="<?php echo $row['Alamat']; ?>">
        </td>
        </tr>

        <tr>
        <td>Kota</td>
        <td>
        <input type="text" name="Kota" value="<?php echo $row['Kota']; ?>">
        </td>
        </tr>

        <tr>
        <td>Telepon</td>
        <td>
        <input type="text" name="Telepon" value="<?php echo $row['Telepon']; ?>">
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