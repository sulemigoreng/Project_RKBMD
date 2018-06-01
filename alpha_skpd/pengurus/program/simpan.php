<?php
		include "../koneksi/koneksi.php";		
		
		echo $kode = $_POST['kode'];
		echo $_POST['nama'];
		$idskpd=$_POST['id_skpd'];
		$tahun= $_POST['tahun'];
		
		$simpan = mysqli_query($koneksi,"INSERT INTO program_skpd (nama_program,id_skpd,tahun) 
			VALUES ( '$_POST[nama]','$idskpd',$tahun)") or die(mysqli_error($koneksi));
				if($simpan){
					header ("location:../?data=program&&kode=$kode");
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=program/input';
						</script>
					";
				}
?>
