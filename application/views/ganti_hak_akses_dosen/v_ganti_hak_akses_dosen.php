<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Hak Akses Dosen</strong>
                        </div>
                    
						<div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>NIP</th>
					<th>Nama Dosen</th>
					<th>Nama Prodi</th>
					<th>Kuota</th>
					<th>ID Login</th>
                    <th>Username</th>
                     <th>Level</th>
                    <th colspan="2" bgcolor="#FF3333">Aksi</th>
					
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nip;?></td>
					<td><?php echo $row->nama_dosen;?></td>
					<td><?php echo $row->nama_prodi;?></td>
					<td><?php echo $row->kuota;?></td>
					<td><?php echo $row->id_login;?></td>
                    <td><?php echo $row->username;?></td>
                    <td><?php echo $row->level;?></td>
					<td>
					<td><a href="<?php echo base_url(); ?>hak_akses_dosen/edit/<?php echo $row->nip;?>">Edit</a></td>
					</td>
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
            
                        </div>
                    </div>
                </div>
