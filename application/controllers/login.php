<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 
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

	public function register_form(){
			$this->load->view('register_form');
		}

	function do_login()
	{
		$username = $this->input->post("uname");
		$password = $this->input->post("pass");
		
		$cek = $this->m_login->cek_user($username,$password);
		if(count($cek) == 1){
			$this->session->set_userdata('username',$username);
			foreach ($cek as $cek){
				$level = $cek['level'];
				$nama = $cek['nama'];
				$this->session->set_userdata(array(
				'isLogin' => TRUE,
				'uname' => $username,
				'lvl' => $level,
				'nama' => $nama,
				));
				redirect('dashboard','refresh');
			}
		}else{
			echo "<script>alert('Username dan Password tidak valid!')</script>";
			redirect('login','refresh');
		}
	}
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_login->input(array (
			'id_login' => $this->input->post('id_login'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
			'password' => $this->input->post('password'),
			'username' => $this->input->post('username')));
			echo "<script> alert('Anda Berhasil Daftar DUDE!!')</script>";
			redirect('login/index','refresh');	

		}else{
			echo "<script> alert('Username dan Password tidak valid!!')</script>";
			redirect('login/register_form','refresh');
		}
	}
}
?>