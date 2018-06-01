<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"DELETE from aturan where kode_aturan = '$_GET[kode_aturan]'");
	header('location:?data=aturan');
?>