<?php
	include("koneksi/koneksi.php");
	$kode = $_GET['kode'];
?>
<div class="main-dash">
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Kegiatan</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Kegiatan</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Kegiatan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi," SELECT * FROM kegiatan_program WHERE id_program = $_GET[kode] order by nama_kegiatan desc");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_kegiatan']; ?></td>
				<td>
				<?php echo"<a href=?data=usulan&&id_kegiatan=$data[id_kegiatan]><button class='btn btn-info' title='Lihat output'><i class='glyphicon glyphicon-search'></i> Lihat Output</button></a>";?>
				<?php echo"<a href=?data=edit_kegiatan&&kode=$data[id_kegiatan]&&kode2=$kode><button class='btn btn-warning' title='Edit kegiatan'><i class='glyphicon glyphicon-edit'></i></button></a>"; ?> 
				<?php echo"<a href=\"?data=hapus_kegiatan&&kode=$data[id_kegiatan]&&kode2=$kode\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\"><button class='btn btn-danger' title='Hapus kegiatan'><i class='glyphicon glyphicon-remove'></i></button></a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_kegiatan&&kode=<?php echo $kode;?>"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Kegiatan</button></a>
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