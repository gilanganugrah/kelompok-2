<?php
class inputTA extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_inputTA');
		$this->load->helper('url');
 
	}
 
	function index(){
	$this->load->view('input/v_inputTA');
	}
 
	function tambah(){
		$this->load->view('v_inputTA');
	}
	
	function tambah_aksi(){
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tgl_input');
		$deskripsi = $this->input->post('deskripsi');
		$nim = $this->input->post('nim');
		$nip = $this->input->post('nip');
		$id_penelitian = $this->input->post('id_penelitian');
 
		$data = array(
			'judul' => $judul,
			'tgl_input' => $tanggal,
			'deskripsi' => $deskripsi,
			'nim' => $nim,
			'nip' => $nip,
			'id_penelitian' => $id_penelitian
			);
		$this->m_inputTA->input_data($data,'ta');
		redirect('inputTA/index');
	}
	
	
 
}
?>
	