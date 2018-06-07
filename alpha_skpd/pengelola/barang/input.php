<?php
	include("koneksi/koneksi.php");
	$idskpd=$_GET['id_skpd'];
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Input Barang</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Input Barang</h3><br/>
		<form method="POST" action="barang/simpan.php" style="padding:0px 10px 10px 10px;">
			<div style="width:100%;">
				<div class="form-group">
					<label for="kode">Kode Barang</label>
					<input type="text" name="kode" class="form-control">
				</div>
				<div class="form-group">
					<label for="nama">Nama Barang</label>
					<input type="text" name="nama" class="form-control">
				</div>
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
			
		</form>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
