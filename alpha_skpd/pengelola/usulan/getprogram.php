<?php
	include('../koneksi/koneksi.php');
	$output="<option>- SELECT -</option>";
	$idskpd=$_POST['idskpd'];
	$query=mysqli_query($koneksi,'SELECT * FROM program_skpd WHERE(id_skpd="'.$idskpd.'")')or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($query)){
		$output=$output."<option value='".$data['id_program']."'>".$data['nama_program']."</option>";
	}
	echo $output;
?>