<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Karyawan</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Edit Karyawan</h3><br/>
		<form method="POST" action="pns/simpan.php" style="padding:0px 10px 10px 10px;">
			<div style="width:100%;">
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" name="nip" class="form-control">
				</div>
				<div class="form-group">
					<label for="namapns">Nama</label>
					<input type="text" name="namapns" class="form-control">
				</div>
				<div class="form-group">
					<label for="skpd">Pilih SKPD</label>
					<select name="idskpd" class="form-control">
						<?php
							$query=mysqli_query($koneksi,"SELECT * FROM skpd")or die(mysqli_error($koneksi));
							while ($data=mysqli_fetch_array($query)) {
								echo "<option value='".$data['id_skpd']."'>".$data['nama_skpd']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="akses">Pilih Akses</label>
					<select name="akses" class="form-control">
						<option value='0'>Pengelola</option>
						<option value='1'>Pengurus</option>
					</select>
				</div>
			</div>
			<h2 colspan=2 align=center><input type=Submit value=Simpan class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
			
		</form>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
