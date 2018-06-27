<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Penentuan Dosen Pembimbing</strong>
                        </div>
                        <div class="card-body">
						<div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>ID Bimbingan</th>
					<th>NIP</th>
					<th>NIM</th>
					<th>NIP</th>
					<th>Action</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_bimbingan;?></td>
					<td><?php echo $row->id_ta;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nip;?></td>
					
					<td>
						<?php echo anchor('penentuan_dospem/edit/'.$row->id_bimbingan,'Edit'); ?>
					</td>
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
                        </div>
                    </div>
                </div>
