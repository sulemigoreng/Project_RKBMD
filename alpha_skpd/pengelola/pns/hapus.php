<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from pns where nip = '$_GET[nip]'");
	header('location:?data=karyawan');
?>
