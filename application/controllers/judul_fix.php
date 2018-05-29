<?php
class judul_fix extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_judul_fix');
	}
	function index(){
		$this->load->view('user/dashboard_user');
		$this->load->view('user/header');
		$this->load->view('user/judul_fix/input_fix');
	}
	function home(){
		//$data = $this->Model_Mahasiswa->get_data();
		$data = array(
				'data'=>$this->m_judul_fix->get_data());
		//$this->load->view('App/list_mhs',['data' => $data]);
		$this->load->view('judul_fix/index',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_judul_fix->input(array (
			'judul' => $this->input->post('judul'),
			'tgl_input' => $this->input->post('tgl_input'),
			'mahasiswa_nim' => $this->input->post('nama'),
			'dosen_nip' => $this->input->post('nama_dosen')));
			redirect('judul_fix/index');
		}else{
			$x = $this->m_judul_fix->get_mhs();
			$data = array(
				'nama'=>$this->m_judul_fix->get_mhs(),
				'nama_dosen'=>$this->m_judul_fix->get_dosen()
				);
			//var_dump($x);
			$this->load->view('user/judul_fix/input_fix',$data);
		}
	}
}