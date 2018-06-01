<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db-SKPD";
	$koneksi = mysqli_connect($host,$user,$pass) or die ("Koneksi tidak dapat dilakukan".mysqli_error());
	$konekdb = mysqli_select_db($koneksi,$db) or die ("Database tidak ditemukan".mysqli_error());
	
?>
