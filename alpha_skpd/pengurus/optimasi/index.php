<?php
	include("koneksi/koneksi.php");
	$idskpd=$_SESSION['id_skpd'];
?>

<div class="main-dash">
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Optimasi Barang</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Optimasi</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Id Optimasi</th>
				<th>Jabatan</th>
				<th>NIP</th>
				<th>Barang</th>
				<th>Jumlah</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"SELECT * FROM barang_optimasi o, barang b, jabatan j WHERE(o.kode_jabatan=j.kode_jabatan AND o.kode_barang=b.kode_barang AND id_skpd='$idskpd')")or die(mysqli_error($koneksi));
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['id_barang_optimasi']; ?></td>
				<td><?php echo $data['nama_jabatan']; ?></td>
				<td><?php echo $data['nip']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jumlah_barang']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td>
				<?php echo"<a href=?data=optimasi/edit&&kode=$data[id_barang_optimasi]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=oprimasi/hapus&&kode=$data[id_barang_optimasi]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_optimasi&&id_skpd=<?php echo $idskpd;?>"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah Optimasi</button></a>
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