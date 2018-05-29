<!DOCTYPE html>
<html>
<head>
	<title>Form Untuk Input Judul Tugas Akhir</title>
</head>
<body>
	<center>
		<h1>Frm Untuk Input Judul Tugas Akhir</h1>
	
	</center>
	<form action="<?php echo base_url(). 'inputTA/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
			
			<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
			
			<td>NIP Dospem</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
			
			<td>ID Judul penelitian</td>
				<td><input type="text" name="id_penelitian"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>