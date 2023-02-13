<?php
include("koneksi.php");
if(isset($_POST['edit']));
$id_toko = $_POST['id_toko'];
$namatoko = $_POST['namatoko'];
$alamat = $_POST['alamat'];
$nosiup = $_POST['nosiup'];
$namapemilik = $_POST['namapemilik'];
$namabahan = $_POST['namabahan'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];

$sql = "UPDATE tb_toko set namatoko='$namatoko', alamat='$alamat', nosiup='$nosiup', namapemilik='$namapemilik' WHERE id_toko='$id_toko'";
$query = mysqli_query($koneksi, $sql);
$sql = "UPDATE tb_bahan set namabahan='$namabahan', satuan='$satuan', harga='$harga'WHERE id_bahan='$id_toko'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('location:tampil.php?status=sukses');
} else {
    header('location:tampil.php?status=gagal');
}
?>