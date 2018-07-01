<?php
	include "koneksi/koneksi.php";
	$hapusLogin = mysqli_query($koneksi,"delete from login where username = '$_GET[nip]'") or die(mysqli_error($koneksi));
	$hapusPns = mysqli_query($koneksi,"delete from pns where nip = '$_GET[nip]'") or die(mysqli_error($koneksi));
	header('location:?data=karyawan');
?>
