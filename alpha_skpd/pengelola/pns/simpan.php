<?php
		include "../koneksi/koneksi.php";
		$nip=$_POST['nip'];
		$namapns=$_POST['namapns'];
		$idskpd=$_POST['idskpd'];
		$password=$_POST['password'];
		$akses=$_POST['akses'];	
		$query=mysqli_query($koneksi,"INSERT INTO pns VALUES('$nip','$namapns','$idskpd')")or die(mysqli_error($koneksi));
		$query2=mysqli_query($koneksi,"INSERT INTO login VALUES('$nip','$password','$akses')")or die(mysqli_error($koneksi));

		if($query && $query2){
			header ('location:../?data=karyawan');
		}
		else{
			echo "
				<script language='javascript'>
					alert('Input Data gagal!');
					window.location='../?data=input_pns';
				</script>
			";
		}
?>
