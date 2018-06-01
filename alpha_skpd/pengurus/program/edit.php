<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi," SELECT * FROM program_skpd WHERE id_program = '$_GET[kode]'");
	$data = mysqli_fetch_array($edit);
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Edit Data Program</h2></div>
		<div class="content-medium green"><h3 class="content-title">Form Edit Data Program</h3><br/>
		<form method='POST' action='program/update.php'>
			<div style="width:100%;">
				<div class="form-group">
					<label for="skpd">ID SKPD</label>
					<input type="text" name="skpd" class="form-control" readonly value="<?php echo $_GET['kode2']; ?>">
				</div>
				<div class="form-group">
					<label for="id">Kode Program</label>
					<input type="text" name="id" class="form-control" readonly value="<?php echo $data['id_program']; ?>">
				</div>
				<div class="form-group">
					<label for="nama">Nama Program</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Program" value="<?php echo $data['nama_program']; ?>">
				</div>
			</div>
           <h2 colspan=2 align=center><input type=Submit value=Update class="btn btn-primary" style="width:46%;margin-right:20px;margin-left:0px;"><input type=button value=Batal onclick=self.history.back() class="btn btn-danger" style="width:48%;"></h2>
        </form>
		</div>
		<div class="clear"></div>
	</div>
</div>