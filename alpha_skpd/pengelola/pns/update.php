<?php
	include "../koneksi/koneksi.php";
	mysqli_query($koneksi,"UPDATE login SET username='$_POST[nip]', password='$_POST[password]' ,
		 akses='$_POST[akses]'
		WHERE username='$_POST[nip]'")or die(mysqli_error($koneksi));
	$update = mysqli_query($koneksi,"UPDATE pns 
		SET nip = '$_POST[nip]', nama_pns= '$_POST[namapns]', id_skpd='$_POST[idskpd]' 
		WHERE nip='$_POST[nip]'")or die(mysqli_error($koneksi));
	if($update){
		header('location:../?data=karyawan');
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				window.location='../?data=edit_pns&&nip=$_POST[nip]';
			</script>
		";
	}						
?>
