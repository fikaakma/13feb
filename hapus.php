<?php
include ("koneksi.php");


$id_toko = $_GET['id_toko'];
$sql = "DELETE FROM tb_bahan WHERE id_bahan='$id_toko'";
$sql = "DELETE FROM tb_toko WHERE id_toko='$id_toko'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>