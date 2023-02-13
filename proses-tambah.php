<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $namatoko = $_POST['namatoko'];
    $alamat = $_POST['alamat'];
    $nosiup = $_POST['nosiup'];
    $namapemilik = $_POST['namapemilik'];
    $namabahan = $_POST['namabahan'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];

$sql ="INSERT INTO tb_bahan(namabahan,satuan,harga) VALUES ('$namabahan','$satuan','$harga')";
$query = mysqli_query($koneksi,$sql);

$sql ="SELECT max(id_bahan) as bahan_id FROM tb_bahan LIMIT 1";
$query = mysqli_query($koneksi,$sql);

$data = mysqli_fetch_array($query);
$bahan_id =$data['bahan_id'];

$sql ="INSERT INTO tb_toko(id_bahan,namatoko,alamat,nosiup,namapemilik) 
       VALUES ('$bahan_id','$namatoko','$alamat','$nosiup','$namapemilik')";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('Location:tampil.php?status=sukses');
} else{
    header('Location:tampil.php?status=gagal');
}
}
?>