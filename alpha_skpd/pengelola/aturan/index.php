<?php
	include("koneksi/koneksi.php");
?>

<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Aturan</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Aturan</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No.</th>
				<th>Jabatan</th>
				<th>Nama Ruangan</th>
				<th>Nama Kendaraan/Barang</th>
				<th>Kuantitas Maks</th>
				<th>Satuan</th>
				<th>Keterangan</th>
				<th width="100px">Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"SELECT * FROM aturan a,jabatan j,ruangan r,barang b WHERE(a.kode_jabatan=j.kode_jabatan AND a.kode_ruangan=r.kode_ruangan AND a.kode_barang=b.kode_barang)");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_jabatan']; ?></td>
				<td><?php echo $data['nama_ruangan']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['kuantitas_maks']; ?></td>
				<td><?php echo $data['satuan']; ?></td>
				<td ><?php echo $data['keterangan']; ?></td>
				<td>
					<div class="btn-group">
						<?php echo"<a href=?data=edit_aturan&&kode_aturan=$data[kode_aturan]><button class=\"btn btn-warning\" title=\"Edit Data\"><i class=\"glyphicon glyphicon-edit\"></i></button></a>"; ?>
						<?php echo"<a href=\"?data=hapus_aturan&&kode_aturan=$data[kode_aturan]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus $data[kode_aturan]?')\"><button class=\"btn btn-danger\" title=\"Hapus Data\"><i class=\"glyphicon glyphicon-remove\"></i></button></a>"; ?>
					</div>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_aturan"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Aturan</button></a></a>
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