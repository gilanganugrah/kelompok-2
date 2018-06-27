<?php
class reviewjudul extends CI_Controller{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_review_judul');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['id_ta'] = $this->m_review_judul->get_ta();
		
		
		$this->load->view('review_judul_reviewer/v_review_judul',$data);
	}
	
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->m_review_judul->input(array (
			'id_ta' => $this->input->post('judul'),
			'hasil_review' => $this->input->post('hasil_review'),
			'status' => $this->input->post('status')));

			
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('reviewjudul/index','refresh');
		}
		else{
			$x =$this->m_review_judul->get_ta();
			$data = array(
				
				'judul'=>$this->m_review_judul->get_ta()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('review_judul_reviewer/v_review_judul',$data);
		}
	}
}

?>
	