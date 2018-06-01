<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Pengajuan</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Pengajuan</h3><br/>
		<table align = "center" border = "1" cellpadding = "20" id="example">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama SKPD</th>
				<th>Tahun</th>
				<th>Aksi</th>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"select perencanaan.id_perencanaan_kebutuhan, skpd.nama_skpd, perencanaan.tahun from perencanaan_kebutuhan perencanaan, skpd skpd where perencanaan.id_skpd=skpd.id_skpd");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_skpd']; ?></td>
				<td><?php echo $data['tahun']; ?></td>
				<td>
				<?php echo"<a href=?data=program/index&&kode=$data[id_perencanaan_kebutuhan]>Lihat Program Kegiatan</a>"; ?> 
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=perencanaan/input"><button>Tambah</button></a>
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