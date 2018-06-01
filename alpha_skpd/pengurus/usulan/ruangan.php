<?php
	include "../koneksi/koneksi.php";	
	$kodejabatan=$_POST['kodejabatan'];
	$output ="<select class='ruangan form-control' name='kode_ruangan'>";
	$output = $output."<option>-Select-</option>";
	$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_ruangan,nama_ruangan FROM aturan a, ruangan r
								WHERE(a.kode_ruangan=r.kode_ruangan AND a.kode_jabatan='$kodejabatan') ") or die(mysqli_error($koneksi));
	while ($data=mysqli_fetch_array($query)) {
		$output= $output.'<option value="'.$data['kode_ruangan'].'">'.$data['nama_ruangan'].'</option>';
	}
	$output=$output."</select>";
	echo $output;
?>