<?php
	include('../koneksi/koneksi.php');
	$idoptimasi=$_POST['idoptimasi'];
	$kodejabatan=$_POST['kodejabatan'];
	$nip=$_POST['nip'];
	$kodebarang=$_POST['kodebarang'];
	$jumlahbarang=$_POST['jumlah'];
	$keterangan=$_POST['keterangan'];
	$query=mysqli_query($koneksi,"UPDATE barang_optimasi 
		SET kode_jabatan='$kodejabatan',nip='$nip',kode_barang='$kodebarang',jumlah_barang=$jumlahbarang,
		keterangan='$keterangan' WHERE(id_barang_optimasi=$idoptimasi)")
	or die(mysqli_error($koneksi));
	if($query){
		header ('location:../?data=optimasi');
	}
	else{
		echo "
			<script language='javascript'>
				alert('Update Data gagal!');
				window.location='../?data=optimasi';
			</script>
		";
	}					
?>
