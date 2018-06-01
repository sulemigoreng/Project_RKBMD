<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi,"select * from aturan where kode_aturan='$_GET[kode_aturan]'");
	$datanow = mysqli_fetch_array($edit);
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Aturan <?php $_GET?></h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Aturan</h3><br/>
		<form method="POST" action="aturan/update.php" style="padding:0px 10px 10px 10px;">
			<div style="width:48%;float:left;margin-right:20px;">
				<div class="form-group">
					<label for="kode_aturan">Kode Aturan</label>
					<input type="text" name="kode_aturan" value="<?php echo $datanow['kode_aturan'];?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<label for="kode_jabatan">Jabatan</label>
					<select name="kode_jabatan" class="form-control">
							<?php
								$query_jabatan=mysqli_query($koneksi,"SELECT * FROM jabatan ORDER BY kode_jabatan ASC");
								while ($data=mysqli_fetch_array($query_jabatan)) {
									if ($datanow['kode_jabatan']==$data['kode_jabatan']) {
										echo '<option value="'.$data['kode_jabatan'].'" selected="selected">'.$data['nama_jabatan'].'</option>';
									}else{
										echo '<option value="'.$data['kode_jabatan'].'">'.$data['nama_jabatan'].'</option>';
									}
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
									if ($datanow['kode_ruangan']==$data['kode_ruangan']) {
										echo '<option value="'.$data['kode_ruangan'].'" selected="selected">'.$data['nama_ruangan'].'</option>';
									}else{
										echo "<option value='".$data['kode_ruangan']."'>".$data['nama_ruangan']."</option>";
									}
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
									if ($datanow['kode_barang']==$data['kode_barang']) {
										echo '<option value="'.$data['kode_barang'].'" selected="selected">'.$data['nama_barang'].'</option>';
									}else{
										echo "<option value='".$data['kode_barang']."'>".$data['nama_barang']."</option>";
									}
								}
							?>
					</select>
				</div>
				<div class="form-group">
					<label for="kuantitas_maks">Kuantitas Maksimal</label>
					<input type="number" name="kuantitas_maks" value="<?php echo $datanow['kuantitas_maks'];?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="satuan">Satuan</label>
					<input type="text" name="satuan" value="<?php echo $datanow['satuan'];?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control"><?php echo $datanow['keterangan'];?></textarea>
				</div>
			<h2 colspan=2 align=center><input type="Submit" value="Simpan" class="btn btn-primary"> <input type=button value=Batal onclick=self.history.back() class="btn btn-danger"></h2>
			
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>