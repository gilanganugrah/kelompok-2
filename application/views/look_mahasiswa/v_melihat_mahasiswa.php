		<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Form Melihat Mahasiswa Yang Memilih Pembimbing</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>NIM</th>
                    <th>Nama</th>
                    <th>Gol</th>
                    <th>Judul</th>
					<th>Nama Pembimbing</th>
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