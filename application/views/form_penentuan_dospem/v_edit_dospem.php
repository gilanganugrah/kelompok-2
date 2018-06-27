<!DOCTYPE html>
<html>
<head>
	<title>Penentuan Dosen Pembimbing</title>
</head>
<body>
	<center>
		<h1>Penentuan Dosen Pembimbing</h1>
		<h3>Edit Penentuan Dosen Pembimbing</h3>
	</center>
	<?php foreach($dosen as $row){ ?>
	<form action="<?php echo base_url(). 'penentuan_dosen/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
					<td>Nama Dosen</td>
					<td>
						<input type="hidden" name="nip" value="<?php echo $row->nip ?>">
						<input type="text" name="Nama Dosen" value="<?php echo $row->nama_dosen ?>">
					</td>
			</tr>
			<tr>
					<td>Nama Mahasiswa</td>
					<input type="text" name="nip" value="<?php echo $row->nim ?>">
					<td><input type="text" name="Prodi" value="<?php echo $row->nama?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>