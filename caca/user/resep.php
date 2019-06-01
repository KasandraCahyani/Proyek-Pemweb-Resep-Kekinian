<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['url']) ){
    header('Location: data-resep.php');
}
//ambil id dari query string
$url = isset($_GET['url']) ? $_GET['url'] : '';

// buat query untuk ambil data dari database
$sql = "SELECT * FROM resep WHERE url='$url'";
$query = mysqli_query($connection, $sql);
$konten = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <title>Resep</title>
    <style>
    body {
  font-family: 'Times New Roman', Times, serif;
  padding: 0px;
  background: #f1f1f1;
}
    </style>
</head>
<body>
<?php include'navbar.php'; ?>
<div class="card">
<center><h1><?php echo $konten['nama_resep'];?></h1></center>
<center><h4>Ditulis oleh : <?php echo $konten['penulis'];?>, <?php echo $konten['tgl_dibuat'];?></h4></center>
<?php echo"<center><img class='fakeimg' src='/caca/user/gambar/".$konten['foto']."'></center>" ?>
<h3>BAHAN</h3>
<p><?php echo $konten['bahan'];?></p>
<h3>LANGKAH</h3>
<p><?php echo $konten['langkah'];?></p>
<p><?php echo "<center><a class='action' href='edit-resep.php?url=".$konten['url']."'>Ubah Resep</a></center> "; ?></p>
</div>

</body>
</html>