<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
    header("location:tampil.php");
}

$id_toko=$_GET['id_toko'];
$sql="SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan= tb_bahan.id_bahan 
WHERE tb_toko.id_toko='$id_toko'";
$query=mysqli_query($koneksi,$sql);
$tb_toko=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>
    <center>

    </div>
    <h2>Edit Data</h2>
    <table border="1">
       <form action="proses-edit.php" method="POST">
       <input type="hidden" name="id_toko" value="<?php echo $tb_toko['id_toko']?>" />
       <tr>
        <td><label for="namatoko"> Nama Toko : </label></td>
        <td><input type="text" name="namatoko" value="<?php echo $tb_toko['namatoko']?>" /></td>
</tr>
    <tr>
        <td><label for="alamat"> Alamat : </label></td>
        <td><input type="text" name="alamat" value="<?php echo $tb_toko['alamat']?>" /></td>
</tr>
    <tr>
        <td><label for="nosiup"> No Siup : </label></td>
        <td><input type="number" name="nosiup" value="<?php echo $tb_toko['nosiup']?>" /></td>
</tr>
    <tr>
        <td><label for="namapemilik"> Nama Pemilik : </label></td>
        <td><input type="text" name="namapemilik" value="<?php echo $tb_toko['namapemilik']?>" /></td>
</tr>
    <tr>
        <td><label for="namabahan"> Nama Bahan : </label>
        <td><input type="text" name="namabahan" value="<?php echo $tb_toko['namabahan']?>" /></td>
</tr>
    <tr>
        <td><label for="satuan"> Satuan : </label></td>
        <td><input type="text" name="satuan" value="<?php echo $tb_toko['satuan']?>" /></td>
</tr>
    <tr>
        <td><label for="harga">Harga : </label></td>
        <td><input type="text" name="harga" value="<?php echo $tb_toko['harga']?>" /></td>
</tr>
</table><p>
<td><input type="submit" name="edit" value="edit"></td>

</center>

</form>
</body>
</html>
