<?php
	include("koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Input Data Barang</title>
	</head>
	<body>
		<form method="POST" action="pengajuan%20barang/simpan.php">
			<table align="center" border="0" cellpadding="20">
				<tr>
					<td>kode</td>
					<td>:</td>
					<td><input type="text" name="kode" readonly value="<?php echo $_GET['kode']; ?>"></td>
				</tr>
				<tr>	
					<td>Nama Barang</td>
					<td>:</td>
					<td>
					<select name="barang">
					<?php
						$tampil = mysqli_query($koneksi,"select * from barang order by nama_barang desc");
						$no = 0;
						while ($data = mysqli_fetch_array($tampil)){
					?>
					  <option value="<?php echo $data['kode_barang'];?>"><?php echo $data['nama_barang'];?></option>
					<?php
						}
					?>  
					</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah Barang</td>
					<td>:</td>
					<td><input type="text" name="jumlah"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td>:</td>
					<td><input type="text" name="satuan"></td>
				</tr>				
				<tr>
					<td><h2 colspan=2 align=center><input type=Submit value=Simpan> <input type=button value=Batal onclick=self.history.back()></h2></td>
				</tr>
			</table>
		</form>
	</body>
</html>


