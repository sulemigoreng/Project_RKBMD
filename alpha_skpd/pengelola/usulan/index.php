<?php
	include("koneksi/koneksi.php");
	if (isset($_GET['id_skpd'])) {
		$idskpd=$_GET['id_skpd'];
	}else{
	$idskpd=' ';}
?>
<div class="main-dash">
	
	<!--- MAIN CONTENT HERE -->
	<div class="main-content">
		<div class="main-title"><h2>Daftar Usulan</h2></div>
		<div class="content-big green">
			<div class="form-group">
				<label for="skpd">Pilih SKPD</label>
				<select id="skpd" class="form-control">
							<?php
							if($idskpd==' '){
								echo"<option selected>- SELECT -</option>";
							}else{
								echo"<option>- SELECT -</option>";
							}
							?>
							<?php
								$query=mysqli_query($koneksi,"SELECT DISTINCT s.id_skpd,s.nama_skpd FROM skpd s,program_skpd p,kegiatan_program k,usulan_barang u
									WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan)")or die(mysqli_error($koneksi));
								while ($data=mysqli_fetch_array($query)) {
									if($idskpd==$data['id_skpd']){
										echo "<option selected value='".$data['id_skpd']."'>".$data['nama_skpd']."</option>";
									}else{
										echo "<option value='".$data['id_skpd']."'>".$data['nama_skpd']."</option>";
									}
								}
							?>
				</select>
			</div>
			<div class="form-group">
				<label for="program">Pilih Program</label>
				<select id="program" class="form-control">
				</select>
			</div>
			<div class="form-group">
				<label for="kegiatan">Pilih Kegiatan</label>
				<select id="kegiatan" class="form-control">
				</select>
			</div>
		</div>
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
				<th width="200px">Aksi</th>
			</tr>
			</thead>
			<tbody id="tableusulan">
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
						<input type="number" max='<?php echo $data['jumlah']; ?>' value='<?php echo $data['jumlah_disetujui']; ?>' name='jumlah_disetujui' class='form-control' style="width:70%;">
						<input type="submit" value="Edit" class="btn btn-info">
					</form>

				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<h2 align=center>
			<a href="?data=input_barang"><button class="btn btn-default" style="width:48%;margin-right:20px;border-color:#d9534f;color:#d9534f;"><img src="../assets/img/pdf.png" style="width:25px;margin-right:10px;"> Cetak Laporan ( PDF )</button></a></a>
			<a href="?data=input_barang"><button class="btn btn-default" style="width:48%;border-color:#5cb85c;color:#5cb85c;"><img src="../assets/img/excel.png" style="width:25px;margin-right:10px;"> Cetak Laporan ( Excel )</button></a></a>
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