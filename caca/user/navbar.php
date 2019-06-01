<?php
require("config.php");
require("session-check.php");
$username=($_SESSION['username']);
$sql2 = "SELECT * FROM user where username='$username'";
$query2 = mysqli_query($connection, $sql2);
$_login = mysqli_fetch_array($query2);
$nama_user=$_login['nama_lengkap'];
$username_penulis=$_login['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  
<div class="container">
<div class="logo">
<a href="http://localhost/caca/user/index.php"><img src="gambar/logo.jpg"></a>
  </div>
<nav>
  <ul>
  <li><a href="daftar-resep.php">Utama</a></li>
  <li><a href="daftar-resepku.php">Resepku</a></li>
  <li><a href="profil.php"><?php echo"$nama_user";?></a></li>
  <li><a href="logout.php">Keluar</a></li>
  </ul>
  </nav>
</div>
</body>
</html>
