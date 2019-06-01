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
    <link rel="stylesheet" type="text/css" href="css/blog-post.css";>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <title>Document</title>
    <style>
    body {
  font-family: Arial;
  padding: 0px;
  background: #f1f1f1;
}
    </style>
</head>
<body>
<?php include'navbar.php'; ?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><?php echo $konten['nama_resep'];?></h2>
      <h4>Ditulis oleh : <?php echo $konten['penulis'];?>, <?php echo $konten['tgl_dibuat'];?></h4>
      <?php echo"<center><img class='fakeimg' src='/caca/user/gambar/".$konten['foto']."'></center>" ?>
      <p><?php echo $konten['resep'];?></p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div> 
</body>
</html>