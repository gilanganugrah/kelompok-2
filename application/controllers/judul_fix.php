<?php
class judul_fix extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_judul_fix');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['nim'] = $this->m_judul_fix->get_mhs();
		$data['nip'] = $this->m_judul_fix->get_dosen();
		$data['id_penelitian'] = $this->m_judul_fix->get_penelitian();
		$this->load->view('judul_fix/input_fix',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_judul_fix->input(array (
			'judul' => $this->input->post('judul'),
			'tgl_input' => $this->input->post('tgl_input'),
			'deskripsi' => $this->input->post('deskripsi'),
			'nim' => $this->input->post('nama'),
			'nip' => $this->input->post('nama_dosen'),
			'id_penelitian' => $this->input->post('judul_penelitian')));
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('judul_fix/index','refresh');
		}
		else{
			$x =$this->m_judul_fix->get_mhs();
			$data = array(
				'nama'=>$this->m_judul_fix->get_mhs(),
				'nama_dosen'=>$this->m_judul_fix->get_dosen(),
				'judul_penelitian'=>$this->m_judul_fix->get_penelitian()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('judul_fix/input_fix',$data);
		}
	}
}