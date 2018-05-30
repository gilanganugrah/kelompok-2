<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Judul Dosen</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>ID</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>GOL</th>
					<th>Judul</th>
					<th>deskripsi</th>
					<th>Hasil Review</th>
					<th>Status</th>
					
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_review;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->gol;?></td>
					<td><?php echo $row->judul;?></td>
					<td><?php echo $row->deskripsi;?></td>
					<td><?php echo $row->hasil_review;?></td>
					<td><?php echo $row->status;?></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
 </div>
                    </div>
                </div>