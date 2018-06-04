<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Data Mahasiswa</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>GOL</th>
					<th>Prodi</th>
					<th>ID Login</th>
					
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->gol;?></td>
					<td><?php echo $row->nama_prodi;?></td>
					<td><?php echo $row->username;?></td>
			
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
 </div>
                    </div>
                </div>