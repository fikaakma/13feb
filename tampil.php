<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
    <center>
    <h2>Input Data</h2>
    <a href="tambah.php"><input type="button" value="tambah"></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat</th>
            <th>No Siup</th>
            <th>Nama Pemilik</th>
            <th>Nama Bahan</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Aksi</th>
</tr>
<?php
include ("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_toko.id_bahan = tb_bahan.id_bahan");

$no = 1;
foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['namatoko']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['nosiup']; ?></td>
        <td><?= $row['namapemilik']; ?></td>
        <td><?= $row['namabahan']; ?></td>
        <td><?= $row['satuan']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td>
            <a href="edit.php?id_toko=<?= $row['id_toko']; ?>">Edit </a>|
            <a href="hapus.php?id_toko=<?= $row['id_toko']; ?>">Hapus </a>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
</center>