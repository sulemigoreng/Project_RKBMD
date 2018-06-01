<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi,"select * from barang where kode_barang='$_GET[kode]'");
	$data = mysqli_fetch_array($edit);
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Data Barang</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Edit Data Barang</h3><br/>
		<form method='POST' action='barang/update.php'>
			<div style="width:100%;">
				<div class="form-group">
					<label for="kode">Kode Barang</label>
					<input type="text" name="kode" readonly value='<?php echo "$data[kode_barang]"; ?>' class="form-control">
				</div>
				<div class="form-group">
					<label for="nama">Nama Barang</label>
					<input type="text" name="nama" class="form-control" value='<?php echo "$data[nama_barang]"; ?>'>
				</div>
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Update class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
        </form>
		</div>
		<div class="clear"></div>
	</div>
</div>