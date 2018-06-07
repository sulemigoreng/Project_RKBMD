<?php
	include('../koneksi/koneksi.php');
	$idskpd=$_POST['idskpd'];
	$kodejabatan=$_POST['kodejabatan'];
	$nip=$_POST['nip'];
	$kodebarang=$_POST['kodebarang'];
	$jumlahbarang=$_POST['jumlah'];
	$keterangan=$_POST['keterangan'];
	echo $kodejabatan;
	$query=mysqli_query($koneksi,"INSERT INTO barang_optimasi(id_skpd,kode_jabatan,nip,kode_barang,jumlah_barang,keterangan)
		VALUES('$idskpd','$kodejabatan','$nip','$kodebarang',$jumlahbarang,'$keterangan')")or die(mysqli_error($koneksi));
	if($query){
		header ('location:../?data=optimasi');
	}
	else{
		echo "
			<script language='javascript'>
				alert('Input Data gagal!');
				window.location='../?data=input_optimasi';
			</script>
		";
	}
?>