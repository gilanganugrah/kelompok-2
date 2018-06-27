<?php
class tgl_judul extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_tgl_judul');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_tgl_judul->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('tgl_judul/v_tgl_judul',$data);
	}
	
	function mhs(){
	$data = array(
		'data'=>$this->m_tgl_judul->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('tgl_judul/v_tgl_mhs',$data);
	}
	
	function tambah(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('v_input');
	}
	
	function input(){
			if (isset($_POST['btnTambah'])){
			$data = $this->m_tgl_judul->input(array (
			'nm_jadwal' => $this->input->post('nm_jadwal'),
			'tgl_input' => $this->input->post('tgl_input'),
			'tgl_batas' => $this->input->post('tgl_batas')));
			
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('tgl_judul/index','refresh');
		}
		else{
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('tgl_judul/index',$data);
		}
		}
	
	function delete($id){
		$this->m_tgl_judul->delete($id);
		redirect('tgl_judul/index');
	}
 
function edit($id_jadwal){
	$where = array('id_jadwal' => $id_jadwal);
	$data['user'] = $this->m_tgl_judul->edit_data($where,'deadline')->result();
	$this->load->view('dashboard_user');
		$this->load->view('header');
	$this->load->view('v_edit',$data);
 		
	}
	
	function update(){
	$id_jadwal = $this->input->post('id_jadwal');
	$nm_jadwal = $this->input->post('nm_jadwal');
	$tgl_input = $this->input->post('tgl_input');
	$tgl_batas = $this->input->post('tgl_batas');
 
	$data = array(
		'nm_jadwal' => $nm_jadwal,
		'tgl_input' => $tgl_input,
		'tgl_batas' => $tgl_batas
	);
 
	$where = array(
		'id_jadwal' => $id_jadwal
	);
 
	$this->m_tgl_judul->update_data($where,$data,'deadline');
	echo "<script> alert('Anda Berhasil EDIT!!')</script>";
	redirect('tgl_judul/index');
}
}
?>
