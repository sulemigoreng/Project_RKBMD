<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from max_barang where kode_barang = '$_GET[kode]'");
	header("location:?data=pengajuan%20barang/index&&kode=$_GET[kode2]");
?>
