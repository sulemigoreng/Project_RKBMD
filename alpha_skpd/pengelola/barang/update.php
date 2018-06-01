<?php
	include "../koneksi/koneksi.php";
	$update = mysqli_query($koneksi,"UPDATE barang SET nama_barang = '$_POST[nama]' WHERE kode_barang = '$_POST[kode]'");
	if($update){
		header('location:../?data=barang');
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				window.location='../?data=barang/edit';
			</script>
		";
	}						
?>
