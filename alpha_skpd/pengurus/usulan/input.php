<?php
	include("koneksi/koneksi.php");
	$idkegiatan=$_GET['id_kegiatan'];
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Input Usulan</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Input Usulan</h3><br/>
		<form method="POST" action="usulan/simpan.php">
			<input type="hidden" name="id_kegiatan" value=<?php echo "'$idkegiatan'"; ?>>
			<div style="width:100%;">
				<div class="form-group">
					<label for="kode_jabatan">Jabatan</label>
					<select id="jabatan" name="kode_jabatan" class="form-control">
								<option>-Select-</option>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT a.kode_jabatan,nama_jabatan FROM aturan a, jabatan j
								WHERE(a.kode_jabatan=j.kode_jabatan) ") or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									echo '<option value="'.$data['kode_jabatan'].'">'.$data['nama_jabatan'].'</option>';
								}
							?>
					</select>
				</div>
				<div class="form-group">
					<label for="kode_ruangan">Ruangan</label>
					<div id="ruangan">
					
					</div>
				</div> 
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" name="nip" required class="form-control">
				</div>
				
				
				<div class="form-group">
					<label for="kode_barang">Kendaraan / Peralatan</label>
					<div id="barang">
					
					</div>
				</div> 
				<div class="form-group">
					<label for="kode_barang">Jumlah</label>
					<div style="width:100%;">
					<input id="jumlah" type="number" name="jumlah" max="4" class="form-control" style="width:48%;float:left;margin-right:15px;"> <input id="satuan" type="text" readonly name="satuan" class="form-control" style="width:48%;float:left;"></div>
					<small style="color:red;" ><br>Jumlah Maksimal : <b id="jmax"></b></small>
				</div> 
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

