<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Jumlah Maximal Setiap Dosen Pembimbing</strong>
                        </div>
                        <div class="card-body">
						<div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama Dosen</th>
					<th>Prodi</th>
					<th>Kuota</th>
					<th>Action</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nip;?></td>
					<td><?php echo $row->nama_dosen;?></td>
					<td><?php echo $row->prodi;?></td>
					<td><?php echo $row->kuota;?></td>
					<td>
						<?php echo anchor('kuota_dospem/edit/'.$row->nip,'Edit'); ?>
					</td>
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
                        </div>
                    </div>
                </div>
