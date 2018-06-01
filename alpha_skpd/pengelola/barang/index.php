<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Barang</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Barang</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"select * from barang order by kode_barang desc");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td ><?php echo $no; ?></td>
				<td><?php echo $data['kode_barang']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td>
				<?php echo"<a href=?data=edit_barang&&kode=$data[kode_barang]><button class=\"btn btn-warning\" title=\"Edit Data\"><i class=\"glyphicon glyphicon-edit\"></i></button></a>"; ?>
				<?php echo"<a href=\"?data=hapus_barang&&kode=$data[kode_barang]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\"><button class=\"btn btn-danger\" title=\"Hapus Data\"><i class=\"glyphicon glyphicon-remove\"></i></button></a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_barang"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</button></a></a>
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