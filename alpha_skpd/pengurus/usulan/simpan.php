<?php
	include "../koneksi/koneksi.php";	
	$idkegiatan=$_POST['id_kegiatan'];
	$kdjabatan=$_POST['kode_jabatan'];
	$nip=$_POST['nip'];
	$kdruangan=$_POST['kode_ruangan'];
	$kdbarang=$_POST['kode_barang'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];

	$simpan=mysqli_query($koneksi,"INSERT INTO usulan_barang (id_kegiatan,kode_jabatan,nip,kode_ruangan,kode_barang,jumlah,satuan) 
		VALUES($idkegiatan,'$kdjabatan','$nip','$kdruangan','$kdbarang',$jumlah,'$satuan')")or die(mysqli_error($koneksi));
	if($simpan){
		header ("location:../?data=usulan&&id_kegiatan=$idkegiatan");
	}else{
		echo "
		<script language='javascript'>
			alert('Input Data gagal!');
			window.location='../?data=usulan/input';
		</script>";
	}
?>