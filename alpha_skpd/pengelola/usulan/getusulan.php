<?php
	include('../koneksi/koneksi.php');
	$output="";
	switch($_POST['action']){
		case 'getusulanskpd': 
			$idskpd=$_POST['idskpd'];
			$query=mysqli_query($koneksi,"SELECT u.kode_usulan,j.nama_jabatan,r.nama_ruangan,nip,b.nama_barang,jumlah,satuan,jumlah_disetujui FROM
					skpd s,program_skpd p,kegiatan_program k,usulan_barang u, jabatan j, ruangan r, barang b
					WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan AND u.kode_jabatan=j.kode_jabatan
						AND u.kode_ruangan=r.kode_ruangan AND u.kode_barang=b.kode_barang AND s.id_skpd='$idskpd')")or die(mysqli_error($koneksi));
		break;
		case 'getusulanprogram': 
			$idprogram=$_POST['idprogram'];
			$query=mysqli_query($koneksi,"SELECT u.kode_usulan,j.nama_jabatan,r.nama_ruangan,nip,b.nama_barang,jumlah,satuan,jumlah_disetujui FROM
					skpd s,program_skpd p,kegiatan_program k,usulan_barang u, jabatan j, ruangan r, barang b
					WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan AND u.kode_jabatan=j.kode_jabatan
						AND u.kode_ruangan=r.kode_ruangan AND u.kode_barang=b.kode_barang AND k.id_program=$idprogram)")or die(mysqli_error($koneksi));
		break;
		case 'getusulankegiatan':
			$idkegiatan=$_POST['idkegiatan'];
			$query=mysqli_query($koneksi,"SELECT u.kode_usulan,j.nama_jabatan,r.nama_ruangan,nip,b.nama_barang,jumlah,satuan,jumlah_disetujui FROM
					skpd s,program_skpd p,kegiatan_program k,usulan_barang u, jabatan j, ruangan r, barang b
					WHERE(s.id_skpd=p.id_skpd AND k.id_program=p.id_program AND u.id_kegiatan=k.id_kegiatan AND u.kode_jabatan=j.kode_jabatan
						AND u.kode_ruangan=r.kode_ruangan AND u.kode_barang=b.kode_barang AND u.id_kegiatan=$idkegiatan)")or die(mysqli_error($koneksi));
		break;
	}
	$no = 0;
	while($data=mysqli_fetch_array($query)){
		$no++;
		$output=$output.
		'<tr>
			<td>'.$no.'</td>
			<td>'.$data['kode_usulan'].'</td>
			<td>'.$data['nama_jabatan'].'</td>
			<td>'.$data['nama_ruangan'].'</td>
			<td>'.$data['nip'].'</td>
			<td>'.$data['nama_barang'].'</td>
			<td>'.$data['jumlah'].'</td>
			<td>'.$data['satuan'].'</td>
			<td>
				
				<form method="post" action="usulan/editsetuju.php?kode_usulan='.$data['kode_usulan'].'&&id_skpd=<?php echo $idskpd;">
						<input type="number" max="'.$data['jumlah'].'" value="'.$data['jumlah_disetujui'].'" name="jumlah_disetujui" class="form-control" style="width:70%;">
						<input type="submit" value="Edit" class="btn btn-info">
				</form>
			</td>
		</tr>';
	}
	echo $output;
?>