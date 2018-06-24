<?php
class penelitian extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_judul_penelitian');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['nip'] = $this->m_judul_penelitian->get_dosen();
		$this->load->view('penelitian/v_penelitian',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_judul_penelitian->input(array (	
			'judul_penelitian' => $this->input->post('judul_penelitian'),
			'kuota' => $this->input->post('kuota'),
			'nip' => $this->input->post('nama_dosen')));
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('penelitian/index','refresh');
		}
		else{
			$x =$this->m_judul_penelitian->get_dosen();
			$data = array(
				'nama_dosen'=>$this->m_judul_penelitian->get_dosen()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('penelitian/v_penelitian',$data);
		}
	}
}