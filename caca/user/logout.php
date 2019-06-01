<?php
	// mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
echo ("
	<script language='JavaScript'>
	window.alert('Anda telah keluar');
	window.location.href='http://localhost/caca/index.php';
	</script>");
?>
