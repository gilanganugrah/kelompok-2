
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
					<th>ID_Login</th>
					<th>Email</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
                    <th>Nama</th>
                    <th colspan="2" bgcolor="#FF3333">Aksi</th>
					
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_login;?></td>
					<td><?php echo $row->email;?></td>
					<td><?php echo $row->username;?></td>
					<td><?php echo $row->password;?></td>
					<td><?php echo $row->level;?></td>
                    <td><?php echo $row->nama;?></td>
					<td><a href="<?php echo base_url(); ?>akun/delete/<?php echo $row->id_login;?>">Hapus</a></td>
					
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