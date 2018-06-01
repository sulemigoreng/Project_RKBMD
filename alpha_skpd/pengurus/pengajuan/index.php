<?php
	include("koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Daftar Usulan RKBMD Kendaraan Dinas dan Peralatan Kantor</title>
	</head>
	<body>
		<h2 align = "center">Daftar Usulan RKBMD Kendaraan Dinas dan Peralatan Kantor</h2>        
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Nama SKPD</th>
				<th>Tahun</th>
				
			</tr>
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
		</table>
		<h2 align=center>
			<a href="?data=perencanaan/input"><button>Tambah</button></a>
		</h2>
	</body>
</html>