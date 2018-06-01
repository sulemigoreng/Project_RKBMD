<?php
	include "../koneksi/koneksi.php";
	$update = mysqli_query($koneksi,"UPDATE aturan SET kode_jabatan = '$_POST[kode_jabatan]',
		kode_ruangan = '$_POST[kode_ruangan]',
		kode_barang = '$_POST[kode_barang]',
		kuantitas_maks = '$_POST[kuantitas_maks]',
		satuan = '$_POST[satuan]',
		keterangan= '$_POST[keterangan]'
		WHERE kode_aturan = '$_POST[kode_aturan]'") or die(mysqli_error($koneksi));
	if($update){
		header('location:../?data=aturan');
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				window.location='../?data=aturan/edit';
			</script>
		";
	}						
?>
