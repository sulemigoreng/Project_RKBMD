<?php
	include("koneksi/koneksi.php");
	$idskpd=$_SESSION['id_skpd'];
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Program</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Program</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Program</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"SELECT * FROM program_skpd p WHERE p.id_skpd='$idskpd'")or die(mysqli_error($koneksi));
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_program']; ?></td>
				<td>
				<?php echo"<a href=?data=kegiatan&&kode=$data[id_program]&&kode2=$idskpd><button class='btn btn-info' title='Lihat kegiatan'><i class='glyphicon glyphicon-search'></i> Lihat Kegiatan</button></a>"; ?>
				<?php echo"<a href=?data=edit_program&&kode=$data[id_program]&&kode2=$idskpd><button class='btn btn-warning' title='Edit program'><i class='glyphicon glyphicon-edit'></i></button></a>"; ?>
				<?php echo"<a href=?data=hapus_program&&kode=$data[id_program]&&kode2=$idskpd\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\"><button class='btn btn-danger' title='Hapus program'><i class='glyphicon glyphicon-remove'></i></button></a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_program&&kode=<?php echo $idskpd?>"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Program</button></a>
		</h2>
		
		</div>
		
		<div class="clear"></div>
	</div>
	<!--- END HERE -->
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
	<div class="clear"></div>
</div>