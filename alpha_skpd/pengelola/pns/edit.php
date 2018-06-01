<?php
	include "koneksi/koneksi.php";
	$edit = mysqli_query($koneksi,"select * from pns where nik='$_GET[nik]'");
	$data = mysqli_fetch_array($edit);
	$eselon = $data['eselon'];
?>
<html>
	<head>
    	<title>Edit Data Karyawan</title>
    </head>
    <body>
    	<h2 align=center>Edit Data Karyawan </h2>
        <form method='POST' action='pns/update.php'>
            <table align=center border=0 cellpadding=20>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input type='text' name='nik' readonly value='<?php echo "$data[nik]"; ?>' class="form-dash"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type='text' name='nama' value='<?php echo "$data[nama_pns]"; ?>'></td>
				</tr>
				<tr>
					<td>SKPD</td>
					<td>:</td>
					<td><textarea rows=4 cols=50 name='skpd'><?php echo "$data[skpd]"; ?></textarea></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:</td>
					<td><input type='text' name='jabatan' value='<?php echo "$data[jabatan]"; ?>'></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type='radio' name='eselon' value='1' <?php if ($eselon == '1') echo 'checked="checked"'; ?>>1
						<input type='radio' name='eselon' value='2' <?php if ($eselon == '2') echo 'checked="checked"'; ?>>2
						<input type='radio' name='eselon' value='3' <?php if ($eselon == '3') echo 'checked="checked"'; ?>>3
						<input type='radio' name='eselon' value='4' <?php if ($eselon == '4') echo 'checked="checked"'; ?>>4
						<input type='radio' name='eselon' value='5' <?php if ($eselon == '5') echo 'checked="checked"'; ?>>5
						
					</td>
				</tr>
            </table>
            <h2 align=center>
                <input type=submit value='Update'>
                <input type=button value='Batal' onclick='self.history.back()'>
            </h2>
        </form>
    </body>
</html>