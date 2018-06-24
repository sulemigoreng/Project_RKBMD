<?php
	include "../koneksi/koneksi.php";
	$kdusulan=$_POST['kode_usulan'];	
	$idkegiatan=$_POST['id_kegiatan'];
	$kdjabatan=$_POST['kode_jabatan'];
	$nip=$_POST['nip'];
	$kdruangan=$_POST['kode_ruangan'];
	$kdbarang=$_POST['kode_barang'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];

	$simpan=mysqli_query($koneksi,"UPDATE usulan_barang SET
		kode_jabatan='$kdjabatan',
		nip='$nip',
		kode_ruangan='$kdruangan',
		kode_barang='$kdbarang',
		jumlah=$jumlah,
		satuan='$satuan'
	WHERE kode_usulan='$kdusulan'")or die(mysqli_error($koneksi));
	if($simpan){
		header("location:../?data=usulan&&id_kegiatan=".$idkegiatan);
	}else{
		echo "
		<script language='javascript'>
			alert('Update Data gagal!');
			window.location='../?data=usulan&&id_kegiatan=$idkegiatan';
		</script>";
	}
?>