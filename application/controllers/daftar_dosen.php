<?php
class daftar_dosen extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_daftar_dosen');
	}
	function index(){
		$data = array(
		'data'=>$this->m_daftar_dosen->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('daftar_dosen/v_daftar_dosen',$data);
	}
	function tambah(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['id_login'] = $this->m_daftar_dosen->get_login();
		$data['id_prodi'] = $this->m_daftar_dosen->get_prodi();
		$this->load->view('daftar_dosen/input_dosen',$data);	
	}

	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_daftar_dosen->input(array (
			'nip' => $this->input->post('nip'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'id_prodi' => $this->input->post('nama_prodi'),
			'kuota' => $this->input->post('kuota'),
			'id_login' => $this->input->post('id_login')));
			
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('daftar_dosen/tambah','refresh');
		}
		else{
			$x =$this->m_daftar_dosen->get_prodi();
			$data = array(
				'nama_prodi'=>$this->m_daftar_dosen->get_prodi(),
				'id_login'=>$this->m_daftar_dosen->get_login()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('daftar_dosen/tambah',$data);
		}
	}
	
	function delete($id){
		$this->m_akun->delete($id);
		redirect('daftar_dosen/index');
	}
}