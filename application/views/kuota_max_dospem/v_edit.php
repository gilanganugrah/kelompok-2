<!DOCTYPE html>
<html>
<head>
	<title>Jumlah Maximal Setiap Dosen Pembimbing</title>
</head>
<body>
	<center>
		<h1>Jumlah Maximal Setiap Dosen Pembimbing</h1>
		<h3>Edit Kuota Dosen Pembimbing</h3>
	</center>
	<?php foreach($dosen as $row){ ?>
	<form action="<?php echo base_url(). 'kuota_dosen/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
					<td>Nama Dosen</td>
					<td>
						<input type="hidden" name="nip" value="<?php echo $row->nip ?>">
						<input type="text" name="Nama Dosen" value="<?php echo $row->nama_dosen ?>">
					</td>
			</tr>
			<tr>
					<td>Prodi</td>
					<td><input type="text" name="Prodi" value="<?php echo $row->prodi?>"></td>
			</tr>
			<tr>
					<td>Kuota</td>
					<td><input type="text" name="Kuota" value="<?php echo $row->kuota ?>"></td>
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