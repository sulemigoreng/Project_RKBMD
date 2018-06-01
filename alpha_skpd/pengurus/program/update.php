<?php
	include "../koneksi/koneksi.php";
	$kode = $_POST['kode'];
	$update = mysqli_query($koneksi,"UPDATE program_skpd SET nama_program = '$_POST[nama]' WHERE id_program = '$_POST[id]'");
	if($update){
		header("location:../?data=program&&kode=$kode");
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				
				window.location='../?data=program/edit';
			</script>
		";
	}						
?>
