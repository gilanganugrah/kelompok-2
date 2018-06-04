<?php
class daftar_mhs extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_daftar_mhs');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['id_prodi'] = $this->m_daftar_mhs->get_prodi();
		$data['id_login'] = $this->m_daftar_mhs->get_login();
		$this->load->view('daftar_mhs/input_mhs',$data);
	}
	function view(){
		$data = array(
		'data'=>$this->m_daftar_mhs->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('daftar_mhs/view_mhs',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_daftar_mhs->input(array (
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'gol' => $this->input->post('gol'),
			'id_prodi' => $this->input->post('nama_prodi'),
			'id_login' => $this->input->post('id_login')));
			
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('daftar_mhs/index','refresh');
		}
		else{
			$x =$this->m_daftar_mhs->get_prodi();
			$data = array(
				'nama_prodi'=>$this->m_daftar_mhs->get_prodi(),
				'id_login'=>$this->m_daftar_mhs->get_login()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('daftar_mhs/input_mhs',$data);
		}
	}
}