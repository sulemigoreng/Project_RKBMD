<?php
	session_start();
	if($_SESSION['level']==1 and $_SESSION['login']=='aktif'){
	$rencana = 'perencanaan/index';
	$pengajuan = 'pengajuan/index';
	$program = 'program/index';
	$input_program = 'program/input';
	$edit_program = 'program/edit';
	$hapus_program = 'program/hapus';
	$kegiatan = 'kegiatan/index';
	$edit_kegiatan = 'kegiatan/edit';
	$hapus_kegiatan = 'kegiatan/hapus';
	$input_kegiatan = 'kegiatan/input';
	$usulan = 'usulan/index';
	$input_usulan = 'usulan/input';
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
	<script src="assets/js/script.js"></script>
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
		      $('#jabatan').change(function(){  
		           var kodejabatan = $(this).val();
		           alert(kodejabatan);
		           $.ajax({  
		                url:"usulan/ruangan.php",  
		                method:"POST",  
		                data:{kodejabatan:kodejabatan},  
		                success:function(data){  
		                     $('#ruangan').html(data);  
		                }  
		           });
		           $('#barang').html(""); //Hilangkan select barang
		      });
		      $('#ruangan').change(function(){  
		      	   var kodejabatan= $("#jabatan").val();
		           var koderuangan = $("select.ruangan").val();
		           alert(koderuangan);
		           $.ajax({  
		                url:"usulan/barang.php",  
		                method:"POST",  
		                data:{kodejabatan:kodejabatan,koderuangan:koderuangan,aksi:"getbarang"},  
		                success:function(data){  
		                     $('#barang').html(data);  
		                }  
		           });
		      });
		      $('#barang').change(function(){  
		      	   var kodejabatan= $("#jabatan").val();
		           var kodebarang = $("select.barang").val();
		           alert(kodejabatan+kodebarang);
		           $.ajax({  
		                url:"usulan/barang.php",  
		                method:"POST",  
		                data:{kodejabatan:kodejabatan,kodebarang:kodebarang,aksi:"getsatuan"},  
		                success:function(data){  
		                    document.getElementById("satuan").value = data;
		                }  
		           });
		           $.ajax({  
		                url:"usulan/barang.php",  
		                method:"POST",  
		                data:{kodejabatan:kodejabatan,kodebarang:kodebarang,aksi:"getmaks"},  
		                success:function(data){  
		                    $("#jumlah").attr({
						       "max" : data,        // substitute your own
						       "placeholder": "maks="+data
						    });
							$('#jmax').html(data); 
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
						include("../koneksi.php");
						$idskpd=$_SESSION['id_skpd'];
						$query=mysqli_query($koneksi,"SELECT nama_skpd FROM skpd WHERE id_skpd='$idskpd'")or die(mysqli_error($koneksi));
						
						if ($data=mysqli_fetch_array($query)) {
							echo "$data[nama_skpd]";
						}
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
					<li><a href="?data=beranda"><img src="../assets/img/home.svg" class="menu-icon">Beranda</a></li>
					<li><a href="?data=program"><img src="../assets/img/upload.svg" class="menu-icon">Usulan Rencana Kebutuhan</a></li>
					<!--<li><a href="?data=rencana">Perencanaan</a></li>-->
				</ul>
				</div>

				<?php
					if(empty($_GET['data'])){
						$_GET['data'] = "beranda";
					}
					switch ($_GET['data']) {
						case 'beranda':		include "beranda.php";		break;
						case 'rencana':		include "$rencana.php";		break;
						case 'program':     include "$program.php"; break;
						case 'input_program':     include "$input_program.php"; break;
						case 'edit_program':     include "$edit_program.php"; break;
						case 'hapus_program':     include "$hapus_program.php"; break;
						
						case 'kegiatan':     include "$kegiatan.php"; break;
						case 'edit_kegiatan':     include "$edit_kegiatan.php"; break;
						case 'hapus_kegiatan':     include "$hapus_kegiatan.php"; break;
						case 'input_kegiatan':     include "$input_kegiatan.php"; break;
						
						case 'usulan':     include "$usulan.php"; break;
						case 'input_usulan':     include "$input_usulan.php"; break;
						default:			include "notfound.php";		break;
					}
				?>
			<footer class="foot_dash">
			<p>Copyright &copy; Crafted by <b>Farhan and Gibran.</b></p>
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