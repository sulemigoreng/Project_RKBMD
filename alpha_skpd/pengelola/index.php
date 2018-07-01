<?php
	ob_start(); //FIX Cannot modify header
	session_start();
	if($_SESSION['level']==0 and $_SESSION['login']=='aktif'){
	
	$kendaraan = 'kendaraan/index';
	$pengajuan = 'pengajuan/index';
	$barang = 'barang/index';
	$edit_barang = 'barang/edit';
	$hapus_barang = 'barang/hapus';
	$input_barang = 'barang/input';
	$aturan = 'aturan/index';
	$edit_aturan = 'aturan/edit';
	$hapus_aturan = 'aturan/hapus';
	$input_aturan = 'aturan/input';
	$karyawan = 'pns/index';
	$usulan = 'usulan/index';
	$input_pns = 'pns/input';
	$hapus_pns = 'pns/hapus';
	$edit_pns = 'pns/edit';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RKBMD - Kendaraan Dinas dan Peralatan Kantor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/cimahi.gif">
	<!--  CSS -->
	<link href="assets/css/styles.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
	<link rel="stylesheet" href="../assets/css/style.css">
	
	
	<!--  JS 
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/jquery-ui.js"></script>
	<script src="../assets/datatables/js/jquery.dataTables.js"/></script>
	<script src="../assets/datatables/js/dataTables.jqueryui.js"/></script>
	-->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#skpd').change(function(){
    			var idskpd=$(this).val();
    			$.ajax({
    				url:'usulan/getprogram.php',
    				method:'POST',
    				data:{idskpd:idskpd},
    				success:function(data){
    					$('#program').html(data);
    				}
    			});
    			$.ajax({
    				url:'usulan/getusulan.php',
    				method:'POST',
    				data:{idskpd:idskpd,action:'getusulanskpd'},
    				success:function(data){
    					$('#tableusulan').html(data);
    				}
    			});
    		});
    		$('#program').change(function(){
    			var idprogram=$(this).val();
    			$.ajax({
    				url:'usulan/getkegiatan.php',
    				method:'POST',
    				data:{idprogram:idprogram},
    				success:function(data){
    					$('#kegiatan').html(data);
    				}
    			});
    			$.ajax({
    				url:'usulan/getusulan.php',
    				method:'POST',
    				data:{idprogram:idprogram,action:'getusulanprogram'},
    				success:function(data){
    					$('#tableusulan').html(data);
    				}
    			});
    		});
    		$('#kegiatan').change(function(){
    			var idkegiatan=$(this).val();
    			$.ajax({
    				url:'usulan/getusulan.php',
    				method:'POST',
    				data:{idkegiatan:idkegiatan,action:'getusulankegiatan'},
    				success:function(data){
    					$('#tableusulan').html(data);
    				}
    			});
    		});
    	});
    </script>

	
  </head>
  <body class="cek">
	<div>
		<div class="header-dash">
				<div class="dash-logo">
					<center><img src="../assets/img/logo.png" width="150px"></center>
				</div>
				<div class="dash-bar" onclick="dropdown()">
					<img src="../assets/img/user_pict.svg" class="img">
					<?php
						/*$exp = explode(" ", $record['nama']);
						echo "$exp[0] ".$exp[sizeof($exp)-1];
						*/
						echo "Username";
					?>
				</div>
				<div id="dropdown" class="dropdown">
					<div class="dropdown-main">
						<div>HELLO !<i class="kecil"><br/>"<?php //echo "$exp[0] ".$exp[sizeof($exp)-1]; ?>Username"</i></div>
						<div class="clear"></div>
					</div>
					<div class="dropdown-button">
						<ul class="menu-userbar">
							<li><a href="security"><img src="../assets/img/key.svg" class="menu-icon">Ubah Password</a></li>
							<li><a href="keluar.php"><img src="../assets/img/logout.svg" class="menu-icon">Logout</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
		</div>
		<div class="content-dash">
			<div class="side-dash">
				<ul class="menu-sidebar">
					<li class="header">MENU</li>
					<li><a href='?data=beranda'><img src="../assets/img/home.svg" class="menu-icon">Beranda</a></li>
					<li><a href="?data=karyawan"><img src="../assets/img/users.svg" class="menu-icon">Karyawan</a></li>
					<li><a href="?data=aturan"><img src="../assets/img/gear.svg" class="menu-icon">Kelola Aturan</a></li>
					<li><a href="?data=barang"><img src="../assets/img/clipboard.svg" class="menu-icon">Barang</a></li>
					<li><a href="?data=usulan"><img src="../assets/img/upload.svg" class="menu-icon">Usulan</a></li>
				</ul>
				</div>

				<?php
					if(empty($_GET['data'])){
						$_GET['data'] = "beranda";
					}
					switch ($_GET['data']) {
						case 'beranda':		include "beranda.php";		break;
						case 'karyawan': include "$karyawan.php"; break;
						case 'aturan':	include "$aturan.php";	break;
						case 'edit_aturan':	include "$edit_aturan.php";	break;
						case 'hapus_aturan':	include "$hapus_aturan.php";	break;
						case 'input_aturan':	include "$input_aturan.php";	break;
						case 'barang':	include "$barang.php";		break;
						case 'edit_barang':	include "$edit_barang.php";		break;
						case 'hapus_barang':	include "$hapus_barang.php";		break;
						case 'input_barang':	include "$input_barang.php";	break;
						case 'usulan':	include "$usulan.php";	break;
						case 'input_pns':	include "$input_pns.php";	break;
						case 'hapus_pns':	include "$hapus_pns.php";	break;
						case 'edit_pns':	include "$edit_pns.php";	break;
						default:			include "notfound.php";		break;
					}
				?>
			<footer class="foot_dash">
			 <p>Copyright &copy; 2018 Nuronia Zulva </p>
			</footer>
			<div class="clear"></div>
		</div>
	</div>
  </body>
<script>
	function dropdown() {
		document.getElementById("dropdown").classList.toggle("show");
	}
	window.onclick = function(event) {
	  if (!event.target.matches('.dash-bar')) {

		var dropdowns = document.getElementsByClassName("dropdown");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	} 
</script>
</html>

<?php	
}else{
		echo "
		<script language='javascript'>
			alert('Anda tidak berhak mengakses');
			window.location='../index.php';
		</script>
		";
} 
?>