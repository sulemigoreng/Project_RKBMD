<?php
	include "../koneksi/koneksi.php";
	$kode = $_POST['kode'];
	$update = mysqli_query($koneksi,"UPDATE kegiatan_program SET nama_kegiatan = '$_POST[nama]', output_kegiatan = '$_POST[output]' WHERE id_kegiatan = '$_POST[id]' AND id_program = '$_POST[kode]'");
	if($update){
		header("location:../?data=kegiatan&&kode=$kode");
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				
				window.location='../?data=kegiatan/edit';
			</script>
		";
	}						
?>
