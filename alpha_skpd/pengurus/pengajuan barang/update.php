<?php
	include "../koneksi/koneksi.php";
	$kode = $_POST['kode'];
	$update = mysqli_query($koneksi,"UPDATE max_barang SET jumlah = '$_POST[jumlah]', satuan = '$_POST[satuan]' WHERE kode_barang = '$_POST[barang]' AND id_perencanaan_kebutuhan = '$_POST[kode]'");
	if($update){
		header("location:../?data=pengajuan%20barang/index&&kode=$kode");
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				
				window.location='../?data=pengajuan%20barang/edit';
			</script>
		";
	}						
?>
