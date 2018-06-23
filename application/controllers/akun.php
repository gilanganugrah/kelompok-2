<?php
class akun extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_akun');
	}
	function index(){
		$data = array(
		'data'=>$this->m_akun->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('akun/v_akun',$data);
	}
	function tambah(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('akun/input_akun');	
	}

	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_akun->input(array (
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
			'nama' => $this->input->post('nama')));
			
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('akun/index','refresh');
		}
		else{
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('akun/input_akun',$data);
		}
	}
	
	function delete($id){
		$this->m_akun->delete($id);
		redirect('akun/index');
	}
}