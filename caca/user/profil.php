<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
        <link rel="stylesheet" type="text/css" href="css/style.css";>
    </head>

    <body>
<?php 
include'navbar.php';
require("config.php");
$username=$_SESSION['username'];
        $sql = "SELECT * FROM user where username='$username'";
        $query = mysqli_query($connection, $sql);
        $user = mysqli_fetch_array($query)
?>
<center> 
  <div class="judul">
  <h2>PROFIL</h2>
        <div class="kotak_menu">
            <table class="profil" border="1" align="center" cellspacing="0" cellpadding="5" margin-top="20px">
            <tr>
            <td rowspan="5">
            <?php echo"<center><img src='/caca/user/gambar/".$user['foto']."'></center>"?>
            </td>
            </tr>
            <tr>
            <td><a class="item-profil" >Nama Lengkap</a></td>
            <td><a class="item-profil" ><?php echo"$user[nama_lengkap]"?></a></td>
            </tr>
            <tr>
            <td><a class="item-profil" >Nama Pengguna</a></td>
            <td><a class="item-profil" ><?php echo"$user[username]"?></a></td>
            </tr>
            <tr>
            <td><a class="item-profil" >Email</a></td>
            <td><a class="item-profil" ><?php echo"$user[email]"?></a></td>
            </tr>
            <tr>
            <td><a class="item-profil" >Lihat Kata Sandi : <input type="checkbox" id="myCheck"  onclick="myFunction()"></td>
            <td><a class="item-profil" id="text" style="display:none" ><?php echo"$user[password]"?></a></td>
            </tr>
            <tr>
            <td colspan="3"><?php echo "<center><a class='action' href='edit-profil.php?username=".$user['username']."'>Ubah Profil</i></a> "; ?></td>
            </tr>
            </table>
        </div>
</center>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
    </body>
</html>