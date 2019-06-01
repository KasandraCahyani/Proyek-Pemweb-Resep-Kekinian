<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['url']) ){
    header('Location: daftar-pemilih.php');
}
//ambil id dari query string
$url = isset($_GET['url']) ? $_GET['url'] : '';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <title>Ubah Resep</title>
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
    <?php
    $sql = "SELECT * FROM resep where url='$url'";
    $query = mysqli_query($connection, $sql);
    $user = mysqli_fetch_array($query);
    date_default_timezone_set('Asia/Jakarta'); 
    include'navbar.php';
    
    ?>
    <div class="form-style-6">
<h1>Ubah Resep</h1>
<form action="proses-edit-resep.php?url=<?php echo $url; ?>" method="post"  enctype="multipart/form-data">
<input type="text" name="nama_resep" value="<?php echo $user['nama_resep'];?>">
<input type="text" name="deskripsi" value="<?php echo $user['deskripsi'];?>">
<input type="hidden" name="username_penulis" value="<?php echo"$username_penulis";?>" readonly>
<input type="hidden" name="penulis" value="<?php echo"$nama_user";?>" readonly>
<input type="hidden" name="tgl_dibuat" value="<?php echo date('d-m-Y@h:ia')?>"readonly>
<input type="text" name="url" value="<?php echo $user['url'];?>">
<textarea id="text" name="bahan" value="<?php echo"$bahan";?>"></textarea>
<textarea id="text" name="langkah" value="<?php echo"$langkah" ;?>"></textarea>
<label for="foto"><a style="color:#000;">Foto : </a></label><input type="file" name="foto"><br><input style="margin-bottom:15px!important;margin-top:-20px!important" type="checkbox" name="ubah_foto">&nbspCeklis jika ingin mengubah foto&nbsp&nbsp

<input type="submit" name="submit" value="Simpan" >
</form>
</div>
</body>
</html>