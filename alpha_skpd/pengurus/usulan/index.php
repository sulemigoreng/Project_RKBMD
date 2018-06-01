<?php
	include("koneksi/koneksi.php");
	$idkegiatan=$_GET['id_kegiatan'];
?>

<div class="main-dash">
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Usulan</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Usulan</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Kode Usulan</th>
				<th>Jabatan</th>
				<th>Ruangan</th>
				<th>NIP</th>
				<th>Barang</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"SELECT * FROM usulan_barang u, jabatan j, ruangan r, barang b
					WHERE u.id_kegiatan='$idkegiatan' AND u.kode_jabatan=j.kode_jabatan AND u.kode_ruangan=r.kode_ruangan
					AND u.kode_barang=b.kode_barang")or die(mysqli_error($koneksi));
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['kode_usulan']; ?></td>
				<td><?php echo $data['nama_jabatan']; ?></td>
				<td><?php echo $data['nama_ruangan']; ?></td>
				<td><?php echo $data['nip']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['satuan']; ?></td>
				<td>
				<?php echo"<a href=?data=program/edit&&kode=$data[kode_usulan]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=program/hapus&&kode=$data[kode_usulan]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_usulan&&id_kegiatan=<?php echo $idkegiatan;?>"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Usulan</button></a>
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