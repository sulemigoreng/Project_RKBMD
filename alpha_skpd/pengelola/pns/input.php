<?php
	include("koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Input Data Karyawan</title>
	</head>
	<body>
		<form method="POST" action="pns/simpan.php">
			<table align="center" border="0" cellpadding="20">
				<tr>
					<td>NIP</td>
					<td>:</td>
					<td><input type="text" name="nip"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="namapns"></td>
				</tr>
				<tr>
					<td>SKPD</td>
					<td>:</td>
					<td><input type="text" name="skpd"></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:</td>
					<td><input type="text" name="jabatan"></td>
				</tr>
				<tr>
					<td>Eselon</td>
					<td>:</td>
					<td>
						<input type="radio" name="eselon" value=1>I
						<input type="radio" name="eselon" value=2>II
						<input type="radio" name="eselon" value=3>III
						<input type="radio" name="eselon" value=4>IV
						<input type="radio" name="eselon" value=5>V
					</td>
				</tr>
				<tr>
					<td><h2 colspan=2 align=center><input type=Submit value=Simpan> <input type=button value=Batal onclick=self.history.back()></h2></td>
				</tr>
			</table>
		</form>
	</body>
</html>


