<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi," SELECT * FROM barang_optimasi WHERE id_barang_optimasi = '$_GET[kode]'");
	$dataEdit = mysqli_fetch_array($edit);
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Optimasi</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Edt Optimasi</h3><br/>
		<form method="POST" action="optimasi/update.php" style="padding:0px 10px 10px 10px;">
			<input type="hidden" name="idoptimasi" value="<?php echo $dataEdit['id_barang_optimasi']; ?>">
			<div style="width:100%;">
				<div class="form-group">
					<label for="kodejabatan">Jabatan</label>
					<select name="kodejabatan" class="form-control">
						<?php
							$query=mysqli_query($koneksi,'SELECT * FROM jabatan')or die(mysqli_error($koneksi));
							while($data=mysqli_fetch_array($query)){
								if($data['kode_jabatan']==$dataEdit['kode_jabatan']){
									echo "<option selected value='".$data['kode_jabatan']."'>".$data['nama_jabatan']."</option>";
								}else{
									echo "<option value='".$data['kode_jabatan']."'>".$data['nama_jabatan']."</option>";
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" name="nip" class="form-control" value="<?php echo $dataEdit['jumlah_barang']; ?>">
				</div>
				<div class="form-group">
					<label for="barang">Kendaraan / Peralatan</label>
					<select name="kodebarang" class="form-control">
						<?php
							$query=mysqli_query($koneksi,'SELECT * FROM barang')or die(mysqli_error($koneksi));
							while($data=mysqli_fetch_array($query)){
								if($data['kode_barang']==$dataEdit['kodebarang']){
									echo "<option selected value='".$data['kode_barang']."'>".$data['nama_barang']."</option>";
								}else{
									echo "<option value='".$data['kode_barang']."'>".$data['nama_barang']."</option>";
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="text" name="jumlah" class="form-control" value="<?php echo $dataEdit['jumlah_barang']; ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control"><?php echo $dataEdit['keterangan']; ?></textarea>
				</div>
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
			
		</form>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
