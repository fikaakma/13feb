<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="proses-tambah.php" method = "POST">
        <form>
            <fieldset>
                <p>
                    <laber for ="namatoko">Nama Toko :</label>
                    <input type = "text" name = "namatoko"/>
</p>
<p>
                    <laber for ="alamat">Alamat :</label>
                    <input type = "text" name = "alamat"/>
</p>
<p>
                    <laber for ="nosiup">No Siup :</label>
                    <input type = "number" name = "nosiup"/>
</p>
<p>
                    <laber for ="namapemilik">Nama Pemilik:</label>
                    <input type = "text" name = "namapemilik"/>
</p>
<p>
                    <laber for = "namabahan">Nama Bahan :</label>
                    <input type = "text" name = "namabahan"/>
</p>
<p>
                    <laber for = "satuan">Satuan :</label>
                    <input type = "text" name = "satuan"/>
</p>
<p>
                    <laber for = "harga">Harga :</label>
                    <input type = "number" name = "harga"/>
</p>
<p>
    <input type ="submit" value="kirim" name="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>