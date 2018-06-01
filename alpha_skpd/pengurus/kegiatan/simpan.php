<?php
		include "../koneksi/koneksi.php";		
		
		echo $kode = $_POST['kode'];
		echo $_POST['nama'];

		$simpan = mysqli_query($koneksi,"INSERT INTO kegiatan_program (nama_kegiatan,id_program) VALUES ( '$_POST[nama]', '$_POST[kode]')");
				if($simpan){
					header ("location:../?data=kegiatan&&kode=$kode");
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=kegiatan/input';
						</script>
					";
				}
?>
