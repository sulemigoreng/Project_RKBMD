<?php
		include "../koneksi/koneksi.php";		
		$kdatrn=$_POST['kode_aturan'];
		$kdjbtn=$_POST['kode_jabatan'];
		$kdrngn=$_POST['kode_ruangan'];
		$kdbrng=$_POST['kode_barang'];
		$kntmaks=$_POST['kuantitas_maks'];
		$satuan=$_POST['satuan'];
		$ket=$_POST['keterangan'];

		echo $kdatrn.$kdjbtn.$kdrngn.$kdbrng;

		$simpan = mysqli_query($koneksi,"INSERT INTO aturan (kode_aturan,kode_jabatan,kode_ruangan,kode_barang,kuantitas_maks,satuan,keterangan)
			VALUES ('$kdatrn','$kdjbtn','$kdrngn','$kdbrng',$kntmaks,'$satuan','$ket')")or die(mysqli_error($koneksi));
				if($simpan){
					header('location:../?data=aturan');
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=aturan/input';
						</script>
					";
				}
?>
