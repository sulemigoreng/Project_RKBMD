<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from barang where kode_barang = '$_GET[kode]'");
	header('location:?data=barang');
?>
