<?php
	include("koneksi/koneksi.php");
	$kdusulan=$_GET['kode'];
	$idkegiatan=$_GET['id_kegiatan'];
	$hapus=mysqli_query($koneksi, "DELETE FROM usulan_barang WHERE kode_usulan=$kdusulan")or die(mysqli_error($koneksi));
	if($hapus){
		header ("location:../?data=usulan&&id_kegiatan=$idkegiatan");
	}else{
		echo "
		<script language='javascript'>
			alert('Hapus Data gagal!');
			window.location='../?data=usulan&&id_kegiatan=$idkegiatan;
		</script>";
	}
?>