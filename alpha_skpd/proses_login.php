<?php
	include "koneksi.php";
	
	session_start();
	ob_start();
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$sql = "select a.username, a.password, a.akses, b.nip, b.nama_pns, b.id_skpd from login a, pns b where b.nip = a.username and a.username = '$user' and a.password = '$pass'";
	$query = mysqli_query($koneksi,$sql);
	
	$cek = mysqli_num_rows($query);
	$get = mysqli_fetch_array($query);

	if($cek == 1){
$_SESSION['nama'] = $get['nama_pns'];
		$_SESSION['level'] = $get['akses'];
		$_SESSION['nip'] = $get['nip'];
		$_SESSION['id_skpd']= $get['id_skpd'];
		$_SESSION['login'] = 'aktif';
		if($_SESSION['level']==0){
			header('location:pengelola/index.php');
		}else if($_SESSION['level']==1){
			header('location:pengurus/index.php');
		}else{
			echo $_SESSION['level'];
			session_destroy();
			echo"
			<script language='javascript'>
				alert('Maaf Anda tidak berhak mengakses! ');
				window.location='index.php';
			</script>
			";
		}
	} else {
		echo"
		<script language='javascript'>
			alert('Gagal Login');
			window.location='index.php';
		</script>
		";	
	}
?>