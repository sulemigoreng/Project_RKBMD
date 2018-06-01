<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RKBMD - Kendaraan Dinas dan Peralatan Kantor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/cimahi.gif">
	<!--  CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body class="cek">
	<div>
		<button onclick="topFunction()" id="topBtn" title="Go to top">^</button>
		<header>
			<div class="nav-bar-container">
				<div class="logo">
					<img src="assets/img/logo.png" width="200px">
				</div>
				<div class="menu-bar">
					<ul class="nav-bar">
						<a href="#" class="active"><li>Beranda</li></a>
						<a href="#"><li>Aturan</li></a>
						<a href="login.php"><li>Login</li></a>
						<a href="about.php"><li>About</li></a>
					</ul>
				</div>
			</div>
		</header>
		<div class="welcome">
			<div class="welcome-teks is-paused js-fade" id="welcome-teks">
				<h1>RENCANA KEBUTUHAN BARANG MILIK DAERAH</h1>
				<p style="font-size:18px; letter-spacing:3px;">Aplikasi RKBMD untuk usulan perencanaan kebutuhan kendaraan dinas dan peralatan kantor pada Pemerintah Kota Cimahi.</p>
			</div>
		</div>
		<div class="intro">
			<div class="intro_container">
				<div class="intro_text">
					<h2>Apa itu RKBMD Kendaraan Dinas dan Peralatan Kantor ?</h2>
					<i>RKMBMD ( Rencana Kebutuhan Barang Milik Daerah )</i>
					<p>Aplikasi ini merupakan aplikasi yang akan membantu Pengurus Barang dan Pengelola Barang dan meminimalisir kesalahan dalam pelaksanakan fungsi Perencanaan Kebutuhan BMD Kendaraan Dinas dan Peralatan Kantor.</p>
				</div>
				<div class="intro_pict">
					<img src="assets/img/logo2.png" width="275px">
				</div>
			</div>
		</div>
		<div class="fitur">
			<div class="fitur_container">
				<div class="fitur_text">
					<h2>LANDASAN NORMATIF</h2>
					<p>Sebagai sebuah aplikasi yang akan berjalan di kawasan pemerintahan. Aplikasi ini tentunya memiliki landasan normatif dalam penggunaannya</p>
					<p>Sebelum menggunakan aplikasi ini. Alangkah lebih baik jika anda mempelajari aturan-aturan terkait perencanaan kebutuhan kendaraan dinas dan peralatan kantor</p>
					<a href="aturan"><button><b>Pelajari Selengkapnya</b></button></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="layanan">
			<div class="layanan_container">
				<div class="layanan_text">
					<h2>FITUR FITUR KAMI</h2>
					<i>Terdapat 3 buah fitur yang aplikasi ini unggulkan, diantaranya adalah</i>
				</div>
				<div class="bungkus_det">
					<div class="layanan_det">
						<div class="det_pic">
							<img src="assets/img/upload.svg" width="80%">
						</div>
						<h4>PRAKTIS</h4>
						<p>Pengurus barang hanya perlu memilih barang yang diperlukan terkait program dan kegiatan yang diinput.</p>
					</div>
					<div class="layanan_det">
						<div class="det_pic">
							<img src="assets/img/shield-alt.svg" width="80%">
						</div>
						<h4>CEPAT</h4>
						<p>Sebagian proses penelaahan RKBMD Kendaraan Dinas dan Peralatan Kantor dilakukan oleh subsistem.</p>
					</div>
					<div class="layanan_det">
						<div class="det_pic">
							<img src="assets/img/chart-bar.svg" width="80%">
						</div>
						<h4>AKURAT</h4>
						<p>Kebutuhan barang maksimum dan pilihan barang yang disediakan sudah sesuai dengan ketentuan yang berlaku.</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="invite">
			<div class="invite-text">
				<h2>TERTARIK JADI ANGGOTA ?</h2>
				<p>Kepada yang berminat untuk bergabung bersama Koperasi Mawaddah silahkan download formulir pendaftarannya terlebih dahulu
				<br/>Harap membaca syarat menjadi anggota di file yang akan didownload</p>
				<button><img src="assets/img/download.svg" class="menu-icon">Download</button>
			</div>
		</div>
		<footer>
		<ul class="nav-bar">
						<a href="#" class="active2"><li>Beranda</li></a>
						<a href="aturan"><li>Aturan</li></a>
						<a href="login"><li>Login</li></a>
						<a href="about"><li>About</li></a>
			</ul>
			
			<p>Copyright &copy; Crafted by <b>Farhan and Gibran.</b></p>
		</footer>
	</div>
  </body>
  	<script>
		var el = document.querySelector('.js-fade');
		if (el.classList.contains('is-paused')){
		  el.classList.remove('is-paused');
		}
	</script>
	<script>
		// Scroll lebih dari 20 dari atas, tampilin button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				var el = document.getElementById('topBtn');
				if (el.classList.contains('is-paused')){
				  el.classList.remove('is-paused');
				}
				document.getElementById("topBtn").style.display = "block";
				
			} else {
				document.getElementById("topBtn").style.display = "none";
			}
		}

		// ketika di clik, ke atas
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
 </html>