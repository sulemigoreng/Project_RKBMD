<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Input Aturan <?php $_GET?></h2></div>
		<div class="content-big green"><h3 class="content-title">Form Input Aturan</h3><br/>
		<form method="POST" action="aturan/simpan.php" style="padding:0px 10px 10px 10px;">
			<div style="width:48%;float:left;margin-right:20px;">
				<div class="form-group">
					<label for="kode_aturan">Kode Aturan</label>
					<input type="text" name="kode_aturan" class="form-control">
				</div>
				<div class="form-group">
					<label for="kode_jabatan">Jabatan</label>
					<select name="kode_jabatan" class="form-control">
							<?php
								$query_jabatan=mysqli_query($koneksi,"SELECT * FROM jabatan ORDER BY kode_jabatan ASC");
								while ($data=mysqli_fetch_array($query_jabatan)) {
								echo '<option value="'.$data['kode_jabatan'].'">'.$data['nama_jabatan'].'</option>';
								}
							?>
					</select>
				</div>
				<div class="form-group">
					<label for="kode_ruangan">Ruangan</label>
					<select name="kode_ruangan" class="form-control">
							<?php
								$query_ruangan=mysqli_query($koneksi,"SELECT * FROM ruangan ORDER BY kode_ruangan ASC");
								while ($data=mysqli_fetch_array($query_ruangan)) {
								echo "<option value='".$data['kode_ruangan']."'>".$data['nama_ruangan']."</option>";
								}
							?>
					</select>
				</div>
			</div>
			<div style="width:48%;float:left;">
				<div class="form-group">
					<label for="kode_barang">Kendaraan / Peralatan</label>
					<select name="kode_barang" class="form-control">
							<?php
								$query_barang=mysqli_query($koneksi,"SELECT * FROM barang ORDER BY kode_barang ASC");
								while ($data=mysqli_fetch_array($query_barang)) {
								echo "<option value='".$data['kode_barang']."'>".$data['nama_barang']."</option>";
								}
							?>
					</select>
				</div>
				<div class="form-group">
					<label for="kuantitas_maks">Kuantitas Maksimal</label>
					<input type="number" name="kuantitas_maks" class="form-control">
				</div>
				<div class="form-group">
					<label for="satuan">Satuan</label>
					<input type="text" name="satuan" class="form-control">
				</div>
			</div>
			<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control" style="width:98%;"></textarea>
				</div>
			<h2 colspan=2 align=center><input type="Submit" value="Simpan" class="btn btn-primary"> <input type=button value=Batal onclick=self.history.back() class="btn btn-danger"></h2>
		</form>
		<div class="clear"></div>
		</div>
	</div>
</div>
