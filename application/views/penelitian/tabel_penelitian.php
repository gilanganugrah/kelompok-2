
<div class="col-lg-20">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Data Dosen</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
				<tr>
				<th>No</th>
                <th>id Penelitian</th>
					<th>Judul Penelitian</th>
					<th>Kuota</th>
					<th>NIP</th>
					<th>Nama Dosen</th>     
                    <th colspan="2" bgcolor="#FF3333">Aksi</th>
					
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
                    <td><?php echo $row->id_penelitian;?></td>
					<td><?php echo $row->judul_penelitian;?></td>
					<td><?php echo $row->kuota;?></td>
					<td><?php echo $row->nip;?></td>
					<td><?php echo $row->nama_dosen;?></td>
					<td><a href="<?php echo base_url(); ?>penelitian/delete/<?php echo $row->id_penelitian;?>">Hapus</a></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
           
		 </div>
	</div>
</div>