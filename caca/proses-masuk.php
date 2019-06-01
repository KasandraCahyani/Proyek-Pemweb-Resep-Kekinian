<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connection,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:user/daftar-resep.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:user/daftar-resep.php");}

	else{

		// alihkan ke halaman login kembali
		echo ("
		<script language='JavaScript'>
		window.alert('User tidak terdaftar!');
		window.location.href='masuk.php';
		</script>");
	}	
}else{
	echo ("
		<script language='JavaScript'>
		window.alert('Gagal Login!, Coba lagi!');
		window.location.href='masuk.php?pesan=gagal';
		</script>");
}

?>