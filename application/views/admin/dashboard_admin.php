<?php
if($this->session->userdata('username') == ""){
	$this->session->set_flashdata('sukses','Silahkan Login dahulu');
	redirect(base_url('login'),'refresh');
	}
?>
Hai <b> <?php echo $user['nama'];?></b>
Kamu berhasil login halaman ADMIN
Keluar <a href="<?php echo base_url('dashboard/logout');?>">keluar</a>