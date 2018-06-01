<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Input Kegiatan</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Input kegiatan</h3><br/>
		<form method="POST" action="kegiatan/simpan.php">
			<div style="width:100%;">
				<div class="form-group">
					<label for="kode">Kode Program</label>
					<input type="text" name="kode" class="form-control" readonly value="<?php echo $_GET['kode']; ?>">
				</div>
				<div class="form-group">
					<label for="nama">Nama Kegiatan</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Kegiatan">
				</div>
				<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
			</div>
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

