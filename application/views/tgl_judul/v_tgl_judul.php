<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Deadline Tanggal Penginputan Judul TA</strong>
                        </div>
                    
						<div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
					<th>ID</th>
					<th>Nama Jadwal</th>
					<th>Tanggal Input</th>
					<th>Tanggal Batas Input</th>
					<th bgcolor="#FF3333">Aksi</th>
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
					<td>
						<?php echo anchor('tgl_judul/edit/'.$row->id_jadwal,'Edit'); ?>
                        <?php echo anchor('tgl_judul/hapus/'.$row->id_jadwal,'Hapus'); ?>
					</td>
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
            
             <span class="login100-form-title p-b-59">
						<a href="<?php echo base_url('akun/tambah');?>"><h3 align="center"><font color="#FF3333">Tambah Data</font></h3></a>
					</span>
                        </div>
                    </div>
                </div>
