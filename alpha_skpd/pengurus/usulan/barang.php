<?php
	include "../koneksi/koneksi.php";
	switch ($_POST['aksi']) {
		case 'getbarang':
			$kodejabatan=$_POST['kodejabatan'];
			$koderuangan=$_POST['koderuangan'];
			$output ="<select class='barang form-control' name='kode_barang'>";
			$output = $output."<option>-Select-</option>";
			$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_barang,nama_barang FROM aturan a, barang b
										WHERE(a.kode_barang=b.kode_barang AND a.kode_ruangan='$koderuangan' AND
											a.kode_jabatan='$kodejabatan') ") or die(mysqli_error($koneksi));
			while ($data=mysqli_fetch_array($query)) {
				$output=$output.'<option value="'.$data['kode_barang'].'">'.$data['nama_barang'].'</option>';
			}
			$output=$output."</select>";
			echo $output;
			break;
		
		case 'getsatuan':
			$kodejabatan=$_POST['kodejabatan'];
			$kodebarang=$_POST['kodebarang'];
			$query=mysqli_query($koneksi,"SELECT DISTINCT a.satuan FROM aturan a
										WHERE(a.kode_barang='$kodebarang' AND a.kode_jabatan='$kodejabatan') ") or die(mysqli_error($koneksi));
			if ($data=mysqli_fetch_array($query)) {
				echo $data['satuan'];
			}
			break;
		case 'getmaks':
			$kodejabatan=$_POST['kodejabatan'];
			$kodebarang=$_POST['kodebarang'];
			$query=mysqli_query($koneksi,"SELECT DISTINCT a.kuantitas_maks FROM aturan a
										WHERE(a.kode_barang='$kodebarang' AND a.kode_jabatan='$kodejabatan') ") or die(mysqli_error($koneksi));
			if ($data=mysqli_fetch_array($query)) {
				echo $data['kuantitas_maks'];
			}
			break;
	}
	
?>