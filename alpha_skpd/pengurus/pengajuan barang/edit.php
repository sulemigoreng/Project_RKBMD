<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi,"select maks.kode_barang, brng.nama_barang, maks.jumlah, maks.satuan from barang brng , max_barang maks where maks.kode_barang=brng.kode_barang and maks.kode_barang='$_GET[kode]'");
	$data = mysqli_fetch_array($edit);
?>
<html>
	<head>
    	<title>Edit Data Barang</title>
    </head>
    <body>
    	<h2 align=center>Edit Data Barang  </h2>
        <form method='POST' action='pengajuan%20barang/update.php'>
            <table align=center border=0 cellpadding=20>
				<tr>
					<td>kode</td>
					<td>:</td>
					<td><input type="text" name="kode" readonly value="<?php echo $_GET['kode2']; ?>"></td>
				</tr>
				<tr>
					<td>kode barang</td>
					<td>:</td>
					<td><input type="text" name="barang" readonly value="<?php echo $data['kode_barang']; ?>"></td>
				</tr><tr>	
					<td>Nama Barang</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" readonly value="<?php echo $data['nama_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jumlah Barang</td>
					<td>:</td>
					<td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td>:</td>
					<td><input type="text" name="satuan" value="<?php echo $data['satuan']; ?>"></td>
				</tr>
            </table>
            <h2 align=center>
                <input type=submit value='Update'>
                <input type=button value='Batal' onclick='self.history.back()'>
            </h2>
        </form>
    </body>
</html>