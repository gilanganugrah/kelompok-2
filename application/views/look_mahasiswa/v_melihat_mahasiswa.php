<html>
	<head>
		<title>Form Melihat Mahasiswa</title>
	</head>
	<body>
		<p><h3 align="center">Form Melihat Mahasiswa Yang Memilih Pembimbing</h3></p>
		
		<p align="center">
			<table border="1">
				<tr>
				<th>No</th>
					<th>NIM</th>
                    <th>Nama</th>
                    <th>Gol</th>
                    <th>Judul</th>
					<th>Nama Pembimbing Yang Di Pilih</th>
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
                    <td><?php echo $row->gol;?></td>
					<td><?php echo $row->judul;?></td>
                    <td><?php echo $row->nama_dosen;?></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>