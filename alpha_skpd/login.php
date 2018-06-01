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
	
	<!--  JS -->
    <script src="assets/js/script.js"></script>
	
  </head>
  <body class="cek">
	<div>
		<header>
			<div class="nav-bar-container">
				<div class="logo">
					<img src="assets/img/logo.png" width="200px">
				</div>
				<div class="menu-bar">
					<ul class="nav-bar">
						<a href="home.php"><li>Beranda</li></a>
						<a href="#"><li>Aturan</li></a>
						<a href="#" class="active"><li>Login</li></a>
						<a href="#"><li>About</li></a>
					</ul>
				</div>
			</div>
		</header>
		<div class="login">
			<div class="login-box">
				<div class="login-img">
					<img src="assets/img/cimahi.gif" width="150px">
				</div>
				<div class="form-login">
					<div class="bungkus-form">
					<center>
					<form action="proses_login.php" method="post">
						<div class="login-style">
							<img src="assets/img/username-icon2.png" class="icon">
							<input type="text" name='user' id='UN' onchange='isOnlySpace(this)' placeholder="NIP" required />
						</div>
						<div class="login-style">
							<img src="assets/img/pass-icon.png" class="icon">
							<input type="password" name='pass' id='pass' onchange='isOnlySpace(this)' placeholder="Password" required />
						</div>
						<input type="submit" value="Login" class="login-button"/><br/>
					</form>
					</center>
					</div>
				</div>
			</div>
		</div>
		<footer class="foot_login">
			<p>Copyright &copy; Crafted by <b>Farhan and Gibran.</b></p>
		</footer>
	</div>
  </body>
  
 </html>             