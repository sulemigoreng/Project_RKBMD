<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi," SELECT * FROM usulan_barang WHERE kode_usulan = '$_GET[kode]'");
	$dataEdit = mysqli_fetch_array($edit);
	$aturan = mysqli_query($koneksi,"SELECT kuantitas_maks FROM aturan 
		WHERE(kode_jabatan='".$dataEdit['kode_jabatan']."' AND kode_ruangan='".$dataEdit['kode_ruangan']."' AND kode_barang='".$dataEdit['kode_barang']."')")
	or die(mysqli_error($koneksi));
	$dataAturan = mysqli_fetch_array($aturan);
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Usulan</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Edit Usulan</h3><br/>
		<form method="POST" action="usulan/update.php">
			<input type="hidden" name="kode usulan" value="<?php echo $dataEdit['kode_usulan']; ?>">
			<input type="hidden" name="id_kegiatan" value="<?php echo $dataEdit['id_kegiatan']; ?>">
			<div style="width:100%;">
				<div class="form-group">
					<label for="kode_jabatan">Jabatan</label>
					<select id="jabatan" name="kode_jabatan" class="form-control">
								<option>-Select-</option>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_jabatan,nama_jabatan FROM aturan a, jabatan j
								WHERE(a.kode_jabatan=j.kode_jabatan) ") or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									if($data['kode_jabatan']==$dataEdit['kode_jabatan']){
										echo '<option selected value="'.$data['kode_jabatan'].'">'.$data['nama_jabatan'].'</option>';
									}else{
										echo '<option value="'.$data['kode_jabatan'].'">'.$data['nama_jabatan'].'</option>';
									}
								}
							?>
					</select>
				</div>
				<div class="form-group">
					<label for="kode_ruangan">Ruangan</label>
					<div id="ruangan">
					<select name="kode_ruangan" class="ruangan form-control">
								<option>-Select-</option>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_ruangan,nama_ruangan FROM aturan a, ruangan r
								WHERE(a.kode_ruangan=r.kode_ruangan AND kode_jabatan='".$dataEdit['kode_jabatan']."')") or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									if($data['kode_ruangan']==$dataEdit['kode_ruangan']){
										echo '<option selected value="'.$data['kode_ruangan'].'">'.$data['nama_ruangan'].'</option>';
									}else{
										echo '<option value="'.$data['kode_ruangan'].'">'.$data['nama_ruangan'].'</option>';
									}
								}
							?>
					</select>
					</div>
				</div> 
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" name="nip" required class="form-control" value="<?php echo $dataEdit['nip']; ?>">
				</div>
				
				
				<div class="form-group">
					<label for="kode_barang">Kendaraan / Peralatan</label>
					<div id="barang">
					<select class='barang form-control' name='kode_barang'>
						<option>-Select-</option>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_barang,nama_barang FROM aturan a, barang b
								WHERE(a.kode_barang=b.kode_barang AND kode_ruangan='".$dataEdit['kode_ruangan']."')") or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									if($data['kode_barang']==$dataEdit['kode_barang']){
										echo '<option selected value="'.$data['kode_barang'].'">'.$data['nama_barang'].'</option>';
									}else{
										echo '<option value="'.$data['kode_barang'].'">'.$data['nama_barang'].'</option>';
									}
								}
							?>
					</select>
					</div>
				</div> 
				<div class="form-group">
					<label for="kode_barang">Jumlah</label>
					<div style="width:100%;">
					<input id="jumlah" type="number" name="jumlah" value="<?php echo $dataEdit['jumlah']; ?>" max="<?php echo $dataAturan['kuantitas_maks']; ?>" class="form-control" style="width:48%;float:left;margin-right:15px;"> <input id="satuan" type="text" readonly name="satuan" value="<?php echo $dataEdit['satuan']; ?>" class="form-control" style="width:48%;float:left;"></div>
					<small style="color:red;" ><br>Jumlah Maksimal : <b id="jmax"><?php echo $dataAturan['kuantitas_maks']; ?></b></small>
				</div> 
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>