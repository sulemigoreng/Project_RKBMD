<?php
	include("koneksi/koneksi.php");
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar PNS</h2></div>
		<div class="content-big green"><h3 class="content-title">Tabel PNS</h3><br/>
		<table align = "center" cellpadding = "20" id="example" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>SKPD</th>
				<th>username</th>
				<th>password</th>
				<th>Akses</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$tampil = mysqli_query($koneksi,"SELECT * FROM pns p,skpd s,login l
					WHERE(nip=username AND p.id_skpd=s.id_skpd) ORDER BY NIP")or die(mysqli_error($koneksi));
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nip']; ?></td>
				<td><?php echo $data['nama_pns']; ?></td>
				<td><?php echo $data['nama_skpd']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['password']; ?></td>
				<td><?php if($data['akses']=='0'){
					echo 'Pengelola';
				}else{
					echo 'Pengurus';
				} ?></td>
				<td>
				<?php echo"<a href=?data=edit_pns&&nip=$data[nip]><button class=\"btn btn-warning\" title=\"Edit Data\"><i class=\"glyphicon glyphicon-edit\"></i></button></a>"; ?>
				<?php echo"<a href='?data=hapus_pns&&nip=$data[nip]' onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\"><button class=\"btn btn-danger\" title=\"Hapus Data\"><i class=\"glyphicon glyphicon-remove\"></i></button></a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_pns"><button class="btn btn-primary" style="width:100%;"><i class="glyphicon glyphicon-plus"></i> Tambah PNS</button></a></a>
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