<!DOCTYPE html>
<html>
<head>
	<title>Deadline Tanggal Penginputan Judul TA</title>
</head>
<body>
	<center>
		<h1>Deadline Tanggal Penginputan Judul TA</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($deadline as $row){ ?>
	<form action="<?php echo base_url(). 'tgl_judul/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
					<td>Nama Jadwal</td>
					<td>
						<input type="hidden" name="ID" value="<?php echo $row->id_jadwal ?>">
						<input type="text" name="Nama Jadwal" value="<?php echo $row->nm_jadwal ?>">
					</td>
			</tr>
			<tr>
					<td>Tanggal Input</td>
					<td><input type="text" name="Tanggal Input" value="<?php echo $row->tgl_input ?>"></td>
			</tr>
			<tr>
					<td>Tanggal Batas Input</td>
					<td><input type="text" name="Tanggal Batas Input" value="<?php echo $row->tgl_batas ?>"></td>
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