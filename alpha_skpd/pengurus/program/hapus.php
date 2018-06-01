<?php
	include "koneksi/koneksi.php";
	$hapus = mysqli_query($koneksi,"delete from program_skpd where id_program = '$_GET[kode]'");
	header('location:?data=program');
?>
