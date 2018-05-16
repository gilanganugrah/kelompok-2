<?php
class Login extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}
	function index()
	{
		$session = $this->session->userdata('isLogin');
		if($session == FALSE)
		{
			$this->load->view('login_form');
		}else
		{
			redirect('dashboard');
		}
	}
	function do_login()
	{
		$username = $this->input->post("uname");
		$password = $this->input->post("pass");
		
		$cek = $this->m_login->cek_user($username,$password);
		if(count($cek) == 1){
			foreach ($cek as $cek){
				$level = $cek['level'];
				$status = $cek['blokir'];
				$nama = $cek['nama'];
			}
			if($status == 'N'){
				$this->session->set_userdata(array(
				'isLogin' => TRUE,
				'uname' => $username,
				'lvl' => $level,
				'nama' => $nama,
				));
				redirect('dashboard','refresh');
			}
			else{
				echo "<script>alert('Akun anda di blok!')</script>";
				redirect('login','refresh');
			}
		}else{
			echo "<script> alert('Username dan Password tidak valid!')</script>";
			redirect('login','refresh');
		}
	}
}
?>