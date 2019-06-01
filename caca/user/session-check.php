<?php 
session_start();
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
   header("location:/caca/masuk.php");
}
?>