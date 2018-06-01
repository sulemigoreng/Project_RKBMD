<?php
		include "../koneksi/koneksi.php";		
		$_POST['kode'];
		$_POST['nama'];
		

		$simpan = mysqli_query($koneksi,"INSERT INTO barang VALUES ('$_POST[kode]', '$_POST[nama]')");
				if($simpan){
					header ('location:../?data=barang');
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=barang/input';
						</script>
					";
				}
?>
