<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Resepku</title>
    <link rel="stylesheet" type="text/css" href="css/style-resep.css">
</head>
<body>
<?php 
include'navbar.php';
?>

<section class="responsive">
  
  <div class="grid-container">
  <center>
  <h2>Daftar Resep</h2> 
  <table>
    <?php
        $display_by = $_SESSION['username'];
        require("config.php");
        $sql = "SELECT * FROM resep where username_penulis='$display_by'";
        $query = mysqli_query($connection, $sql);
        $cek = mysqli_num_rows($query);
        while($resep = mysqli_fetch_array($query)){
        echo"<tr>";
        echo"<td rowspan='5'><img src='/caca/user/gambar/".$resep['foto']."' style='width:200px;margin-right:15px'></td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td><a class='nama_resep' href=http://localhost/caca/user/resep.php?url=".$resep['url'].">".$resep['nama_resep']."</a></td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>Oleh : ".$resep['penulis']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>".$resep['deskripsi']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td><a href=http://localhost/caca/user/resep.php?url=".$resep['url'].">Lihat Resep >></a></td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td colspan='2'><hr></a></td>";
        echo"</tr>";
        }
        ?>
      </table>
      </center>
      </section>
    <center><tr>
    <td><a class="link" href="tambah-resep.php">Tambah Resep</a></td>
    </tr></center>
    <tr>
    <td></td>
    </tr>

    
</body>
</html>