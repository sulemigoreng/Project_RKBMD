<?php
	include("koneksi/koneksi.php");
	$kdoptimasi=$_GET['kode'];
	$hapus=mysqli_query($koneksi, "DELETE FROM barang_optimasi WHERE id_barang_optimasi=$kdoptimasi")or die(mysqli_error($koneksi));
	header("location:?data=optimasi");
?>