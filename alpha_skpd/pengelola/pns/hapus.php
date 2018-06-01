<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from pns where nik = '$_GET[nik]'");
	header('location:?data=pns/index');
?>
