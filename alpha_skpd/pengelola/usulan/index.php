<?php
	include("koneksi/koneksi.php");
	if (isset($_GET['id_skpd'])) {
		$idskpd=$_GET['id_skpd'];
	}else{
	$idskpd='1.01.01.';}
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Usulan</h2></div>
		<div>
			<table>
				<tr>
					<td>Pilih SKPD : </td>
					<td>
						<select>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT s.id_skpd,s.nama_skpd FROM skpd s,program_skpd p,kegiatan_program k,usulan_barang u
									WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan)")or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									if($idskpd==$data['id_skpd']){
										echo "<option selected value=".$data['s.id_skpd'].">".$data['nama_skpd']."</option>";
									}else{
										echo "<option value=".$data['s.id_skpd'].">".$data['nama_skpd']."</option>";
									}
								}
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div class="content-big green"><h3 class="content-title">Tabel Daftar Usulan</h3><br/>
		<table align = "center" border = "1" cellpadding = "20" id="example">
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
				$tampil = mysqli_query($koneksi,"SELECT u.kode_usulan,j.nama_jabatan,r.nama_ruangan,nip,b.nama_barang,jumlah,satuan,jumlah_disetujui FROM
					skpd s,program_skpd p,kegiatan_program k,usulan_barang u, jabatan j, ruangan r, barang b
					WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan AND u.kode_jabatan=j.kode_jabatan
						AND u.kode_ruangan=r.kode_ruangan AND u.kode_barang=b.kode_barang AND s.id_skpd='$idskpd')");
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
					<form method="post" action='usulan/editsetuju.php?kode_usulan=<?php echo $data['kode_usulan']; ?>&&id_skpd=<?php echo $idskpd; ?>'>
						<input type="number" max='<?php echo $data['jumlah']; ?>' value='<?php echo $data['jumlah_disetujui']; ?>' name='jumlah_disetujui'>
						<input type="submit" value="Edit">
					</form>
				<?php echo"<a href=?data=edit_barang&&kode=$data[kode_usulan]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=hapus_barang&&kode=$data[kode_usulan]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_barang"><button>Tambah</button></a> | <a href="../index.php"><button>Menu</button></a>
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