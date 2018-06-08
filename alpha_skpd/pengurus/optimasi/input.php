<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Input Optimasi</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Input Optimasi</h3><br/>
		<form method="POST" action="optimasi/simpan.php" style="padding:0px 10px 10px 10px;">
			<input type="hidden" name="idskpd" value="<?php echo $idskpd; ?>">
			<div style="width:100%;">
				<div class="form-group">
					<label for="kodejabatan">Jabatan</label>
					<select name="kodejabatan" class="form-control">
						<?php
							$query=mysqli_query($koneksi,'SELECT * FROM jabatan')or die(mysqli_error($koneksi));
							while($data=mysqli_fetch_array($query)){
								echo "<option value='".$data['kode_jabatan']."'>".$data['nama_jabatan']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" name="nip" class="form-control">
				</div>
				<div class="form-group">
					<label for="barang">Barang</label>
					<select name="kodebarang" class="form-control">
						<?php
							$query=mysqli_query($koneksi,'SELECT * FROM barang')or die(mysqli_error($koneksi));
							while($data=mysqli_fetch_array($query)){
								echo "<option value='".$data['kode_barang']."'>".$data['nama_barang']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="text" name="jumlah" class="form-control">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control"></textarea>
				</div>
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
			
		</form>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
