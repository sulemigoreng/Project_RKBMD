<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from kegiatan_program where id_kegiatan = '$_GET[kode]'");
	header("location:?data=kegiatan&&kode=$_GET[kode2]");
?>
