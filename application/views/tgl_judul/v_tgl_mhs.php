<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Deadline Tanggal Penginputan Judul TA</strong>
                        </div>
                        <div class="card-body">
						<div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>ID</th>
					<th>Nama Jadwal</th>
					<th>Tanggal Input</th>
					<th>Tanggal Batas Input</th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_jadwal;?></td>
					<td><?php echo $row->nm_jadwal;?></td>
					<td><?php echo $row->tgl_input;?></td>
					<td><?php echo $row->tgl_batas;?></td>
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
                        </div>
                    </div>
                </div>
