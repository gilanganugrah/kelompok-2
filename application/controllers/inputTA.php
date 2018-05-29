<?php
class inputTA extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_inputTA');
	}
	function index(){
		$this->load->view('input/inputTA');
	}
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Mahasiswa->input(array (
			'nim' => $this->input->post('nim'),
			'nip' => $this->input->post('nama_dosen'),
			'id_penelitian' => $this->input->post('judul_penelitian'),
			'judul' => $this->input->post('judul'),
			'deskipsi' => $this->input->post('deskripsi')));
			redirect('dashboard');
		}else{
			$x =$this->Model_Mahasiswa->get_dosen();
			$data = array(
				'nama_dosen'=>$this->m_inputTA->get_dosen(),
				'judul_penelitian'=>$this->m_inputTA->get_penelitian()
				);
			//var_dump($x);
			$this->load->view('input/inputTA',$data);
		}
	}
	
	
?>
	