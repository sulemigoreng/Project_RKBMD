<?php
	include('../koneksi/koneksi.php');
	$kodeusulan=$_GET['kode_usulan'];
	$idskpd=$_GET['id_skpd'];
	$jumlahdisetujui=$_POST['jumlah_disetujui'];
	$update=mysqli_query($koneksi,"UPDATE usulan_barang SET jumlah_disetujui=$jumlahdisetujui
		WHERE kode_usulan=$kodeusulan")or die(mysqli_error($koneksi));
	if($update){
		header('location:../?data=usulan&&id_skpd='.$idskpd.'');
	}
	else
	{
		echo "
			<script language='javascript'>
				alert('Edit Data Gagal !!!');
				window.location='../?data=usulan';
			</script>
		";
	}	
?>