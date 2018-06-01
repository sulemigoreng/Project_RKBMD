<?php
	include("koneksi/koneksi.php");
	$kode = $_GET['kode'];
?>

<html>
	<head>
		<title>Daftar Barang </title>
	</head>
	<body>
		<h2 align = "center">Daftar Barang Maksimal Di Ajukan</h2>
		<?php
			$tampil = mysqli_query($koneksi,"select perencanaan.id_perencanaan_kebutuhan, skpd.nama_skpd, perencanaan.tahun from perencanaan_kebutuhan perencanaan, skpd skpd where perencanaan.id_skpd=skpd.id_skpd and id_perencanaan_kebutuhan = $_GET[kode]");
			if ($data = mysqli_fetch_array($tampil)){
		?>
		<h2 align = "center"><?php echo $data['nama_skpd'];?></h2>
		<h2 align = "center">Tahun<?php echo $data['tahun'];?></h2>        
		<?php
			}
		?>
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				
				
			</tr>
			<?php
				$tampil = mysqli_query($koneksi," SELECT maks.kode_barang, brng.nama_barang, maks.jumlah, maks.satuan
										FROM max_barang maks, barang brng, perencanaan_kebutuhan rencana
										WHERE maks.id_perencanaan_kebutuhan = rencana.id_perencanaan_kebutuhan AND maks.id_perencanaan_kebutuhan = $_GET[kode] AND maks.kode_barang=brng.kode_barang order by kode_barang desc");
				$no = 0;
				while ($data = mysqli_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['kode_barang']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['satuan']; ?></td>
				<td>
				<?php echo"<a href=?data=pengajuan%20barang/edit&&kode=$data[kode_barang]&&kode2=$kode>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=pengajuan%20barang/hapus&&kode=$data[kode_barang]&&kode2=$kode\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=pengajuan%20barang/input&&kode=<?php echo $kode?>"><button>Tambah</button></a>
		</h2>
	</body>
</html>

<?php

?>