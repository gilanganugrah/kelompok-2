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

function tabel(){
		$data = array(
		'data'=>$this->m_judul_penelitian->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('penelitian/tabel_penelitian',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_judul_penelitian->input(array (
			'judul_penelitian' => $this->input->post('judul_penelitian'),
			'kuota' => $this->input->post('kuota'),
			'nip' => $this->input->post('nip')));
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('penelitian/index');
		}else{
			$x = $this->m_judul_penelitian->get_dosen();
			$data = array(
				'nip'=>$this->m_judul_penelitian->get_dosen()
				);
			//var_dump($x);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('penelitian/index',$data);
		}
	}
	function delete($id){
		$this->m_akun->delete($id);
		redirect('daftar_dosen/index');
	}
}