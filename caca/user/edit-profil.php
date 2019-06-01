<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['username']) ){
    header('Location: daftar-pemilih.php');
}
//ambil id dari query string
$username = isset($_GET['username']) ? $_GET['username'] : '';

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
        <title>Ubah Profil</title>
    </head>

    <body>
<?php 
include'navbar.php';
require("config.php");
        $username=$_SESSION['username']; 
        $sql = "SELECT * FROM user where username='$username'";
        $query = mysqli_query($connection, $sql);
        $user = mysqli_fetch_array($query);
?>
<center>
<form method="post" action="proses-edit-profil.php?username=<?php echo $username; ?>" enctype="multipart/form-data">
        <div class="kotak_menu kotak_edit">
            <div class="judul">
            <h2>UBAH PROFIL</h2>
            <table class="profil" border='1' align="center" cellspacing="0" cellpadding="5" margin-top="20px">
            <tr>
            <td rowspan="7">
            <?php echo"<center><img src='/caca/user/gambar/".$user['foto']."' width='40' height='175'></center>"?>
            </td>
            </tr>
            <tr>
            <td><label class="edit-profil">Nama Lengkap</a></label></td>
            <td><input name="nama_lengkap" type="text" class="item-profil" value="<?php echo"$user[nama_lengkap]"?>"/></td>
            </tr>
            <tr>
            <td><label><a class="item-profil" >Nama Pengguna</a></label></td>
            <td><input name="username" type="text" class="item-profil" value="<?php echo"$user[username]"?>" readonly/></td>
            </tr>
            <tr>
            <td><label><a class="item-profil" >Email</a></label></td>
            <td><input name="email" type="text" class="item-profil" value="<?php echo"$user[email]"?>"/></td>
            </tr>
            <tr>
            <td><label><a class="item-profil" >Lihat Kata Sandi  <input type="checkbox" id="myCheck"  onclick="myFunction()"></label></td>
            <td><a id="text" style="display:none"><input type="text" name="password" class="item-profil" value="<?php echo"$user[password]"?>"/></a></td>
            </tr>
            </tr>
        <td><label for="foto">Foto</td>
        <td><input type="file" name="foto"><br><input type="checkbox" name="ubah_foto">Ceklis jika ingin mengubah foto&nbsp&nbsp</td>
        <tr>
            <tr>
            <td colspan="2"><input type="button" style="cursor: pointer;" value="Batal" onclick="window.location.href='profil.php'" /></td>
            <td><button style="cursor: pointer;float:right" class="btn btn-primary" type="submit" name="submit" />Simpan</button></td>
            </tr>
            </table>
        </div>
</form>
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