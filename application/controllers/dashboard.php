<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 
class Dashboard extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	$this->load->model('m_login');	
}
function index()
{
	$ambil_akun = $this->m_login->ambil_user($this->session->userdata('nama'));
	$data = array(
		'user'=>$ambil_akun,
		);
		$stat = $this->session->userdata('lvl');
		if($stat=='koordinator'){
			$this->load->view('dashboard_user',$data);
		}
		else if($stat=='mahasiswa'){
			$this->load->view('dashboard_user',$data);
		}
		else if($stat=='dosen'){
			$this->load->view('dashboard_user',$data);
		}
		else if($stat=='reviewer'){
			$this->load->view('dashboard_user',$data);
		}else{	
		}
		$this->load->view('header');
	}
	
	function login()
	{
		$session = $this->session->userdata('isLogin');
		if($session==FALSE)
	{
		$this->load->view('login_form');
	}else
	{
		redirect('dashboard');
	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}

?>