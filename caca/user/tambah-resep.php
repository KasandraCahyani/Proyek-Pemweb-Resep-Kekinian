<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link href="/css/style.css" rel="stylesheet">
    <title>Tambah Resep</title>
    <style>
body p {

padding-left: 0px;
font-size: 12px;
position: initial;
bottom: 0px;

}
    </style>
</head>
<body>
    <?php date_default_timezone_set('Asia/Jakarta'); 
    include'navbar.php';?>
    <div class="form-style-6">
<h1>Tambah Resep</h1>
<form action="proses-tambah-resep.php" method="post"  enctype="multipart/form-data">
<input type="hidden" name="id_resep" value="">
<input type="text" name="nama_resep" placeholder="Judul Resep">
<input type="text" name="deskripsi" placeholder="Deskripsi Resep">
<input type="hidden" name="username_penulis" value="<?php echo"$username_penulis";?>" readonly>
<input type="hidden" name="penulis" value="<?php echo"$nama_user";?>" readonly>
<input type="hidden" name="tgl_dibuat" value="<?php echo date('d-m-Y@h:ia')?>"readonly>
<input type="text" name="url" placeholder="URL">
<textarea id="text" name="bahan" placeholder="Bahan" style="height:500px"></textarea>
<textarea id="text" name="langkah" placeholder="Langkah" style="height:500px"></textarea>
<label for="foto"><a style="color:#000;">Foto : </a></label><input style="margin-bottom:15px!important" type="file" name="foto">
<input type="submit" name="submit" value="Unggah" />
</form>
</div>
</body>
</html>