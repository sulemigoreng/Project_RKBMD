<?php
	include("koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Input Data Barang</title>
	</head>
	<body>
		<form method="POST" action="perencanaan/simpan.php">
			<table align="center" border="0" cellpadding="20">
				<tr>
					<td>SKPD</td>
					<td>:</td>
					<td>
					<select name="skpd">
					<?php
						$tampil = mysqli_query($koneksi,"select * from skpd order by id_skpd desc");
						$no = 0;
						while ($data = mysqli_fetch_array($tampil)){
					?>
					  <option value="<?php echo $data['id_skpd'];?>"><?php echo $data['nama_skpd'];?></option>
					<?php
						}
					?>  
					</select>
					</td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td>:</td>
					<td><input type="number" min="2000" max="2099" step="1" value="2018"  name="tahun"/></td>
				</tr>
				
				<tr>
					<td><h2 colspan=2 align=center><input type=Submit value=Simpan> <input type=button value=Batal onclick=self.history.back()></h2></td>
				</tr>
			</table>
		</form>
	</body>
</html>


