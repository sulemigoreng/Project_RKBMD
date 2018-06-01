<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar PNS</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel PNS</h3><br/>
		<table align = "center" border = "1" cellpadding = "20" id="example">
			<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>SKPD</th>
				<th>Jabatan</th>
				<th>Eselon</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"select * from pns order by nik");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nik']; ?></td>
				<td><?php echo $data['nama_pns']; ?></td>
				<td><?php echo $data['skpd']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><?php echo $data['eselon']; ?></td>
				<td>
				<?php echo"<a href=?data=pns/edit&&nik=$data[nik]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=pns/hapus&&nik=$data[nik]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus $data[nama_pns]?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=pns/input"><button>Tambah</button></a> | <a href="../index.php"><button>Menu</button></a>
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