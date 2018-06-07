<?php
	include('../koneksi/koneksi.php');
	$output="<option>- SELECT -</option>";
	$idprogram=$_POST['idprogram'];
	$query=mysqli_query($koneksi,'SELECT * FROM kegiatan_program WHERE(id_program='.$idprogram.')')or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($query)){
		$output=$output."<option value='".$data['id_kegiatan']."'>".$data['nama_kegiatan']."</option>";
	}
	echo $output;
?>