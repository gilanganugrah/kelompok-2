<html>
	<head>
		<title>Input Tugas Akhir</title>
	</head>
	<body>
		<h4 align="center">Pengajuan Judul Tugas Akhir</h4>
		<div align="center">
		<p>
			<form method="post" action="input">
        NIM<br/><input type="text" name="nim" size="10" maxlength="10"><br/><br/>
		
		
        Dosen Pembimbing<br/>
        <select name="nama_dosen">
        <?php foreach ($nama_dosen as $row){ ?>
        	<option value="<?php echo $row->id;?>"><?php echo $row->nama_dosen;?></option>
        	<?php }?>
        </select>
        <br/><br/>
		
		 Judul Penelitian<br/>
        <select name="judul_penelitian">
        <?php foreach ($judul_penelitian as $row){ ?>
        	<option value="<?php echo $row->id;?>"><?php echo $row->judul_penelitian;?></option>
        	<?php }?>
        </select>
        <br/><br/>
		
		Judul<br/>
		<textarea name="judul" cols="10"></textarea>
		<br/><br/>
		
		Deskripsi<br/>
		<textarea name="deskripsi" cols="10"></textarea>
		<br/><br/>
		
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>