<?php
		include "../koneksi/koneksi.php";		
		$_POST['nip'];
		$_POST['namapns'];
		$_POST['skpd'];
		$_POST['jabatan'];
		$_POST['eselon'];


		$simpan = mysqli_query($koneksi,"INSERT INTO pns (nik,nama_pns,skpd,jabatan,eselon) VALUES('$_POST[nip]','$_POST[namapns]','$_POST[skpd]','$_POST[jabatan]','$_POST[eselon]')");
				if($simpan){
					header ('location:../?data=pns/index');
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=pns/input';
						</script>
					";
				}
?>
