<?php
	include "../koneksi/koneksi.php";
	$update = mysqli_query($koneksi,"UPDATE pns SET nik = '$_POST[nik]', nama_pns= '$_POST[nama]', skpd='$_POST[skpd]', jabatan='$_POST[jabatan]', eselon='$_POST[eselon]' WHERE nik='$_POST[nik]'");
	if($update){
		header('location:../?data=pns/index');
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				window.location='../?data=pns/edit';
			</script>
		";
	}						
?>
