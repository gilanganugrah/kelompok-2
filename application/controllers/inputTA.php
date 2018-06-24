<?php
class inputTA extends CI_Controller{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_inputTA');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['nim'] = $this->m_inputTA->get_mhs();
		$data['nip'] = $this->m_inputTA->get_dosen();
		$data['id_penelitian'] = $this->m_inputTA->get_penelitian();
		$this->load->view('input/v_inputTA',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_inputTA->input(array (
			'judul' => $this->input->post('judul'),
			'tgl_input' => $this->input->post('tgl_input'),
			'deskripsi' => $this->input->post('deskripsi'),
			'nim' => $this->input->post('nama'),
			'nip' => $this->input->post('nama_dosen'),
			'id_penelitian' => $this->input->post('judul_penelitian')));
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('inputTA/index','refresh');
		}
		else{
			$x =$this->m_inputTA->get_mhs();
			$data = array(
				'nama'=>$this->m_inputTA->get_mhs(),
				'nama_dosen'=>$this->m_inputTA->get_dosen(),
				'judul_penelitian'=>$this->m_inputTA->get_penelitian()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('input/v_inputTA',$data);
		}
	}
}

?>
	