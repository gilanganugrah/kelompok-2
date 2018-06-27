<?php
if($this->session->userdata('username') == ""){
	$this->session->set_flashdata('sukses','Silahkan Login dahulu');
	redirect(base_url('login'),'refresh');
	}
?>

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
					<th>ID Judul</th>
					<th>Judul</th>
					<th>Tgl Input</th>
					<th>Deskripsi</th>
					<th>NIM</th>
                    <th>Nama Mhs</th>
                    <th>NIP</th>
                    <th>Nama Dosen</th>
                    <th>Judul Penelitian</th>
                  
					
				</tr>
                

				<?php

                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->id_final;?></td>
					<td><?php echo $row->judul;?></td>
					<td><?php echo $row->tgl_input;?></td>
					<td><?php echo $row->deskripsi;?></td>
					<td><?php echo $row->nim;?></td>
                    <td><?php echo $row->nama;?></td>
                    <td><?php echo $row->nip;?></td>
                    <td><?php echo $row->nama_dosen;?></td>
                    <td><?php echo $row->judul_penelitian;?></td>
				
					
				</tr>
				<?php $no++;
                endforeach;?>
                
			</table>
       <a href="<?php echo base_url('judul_fix/tambah'); ?>"> <h4 align="center"><font color="#FF3333">INPUT DATA</font></h4></a>
			
      
		 </div>
	</div>
</div>