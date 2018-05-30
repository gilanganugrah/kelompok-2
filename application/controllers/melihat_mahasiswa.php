<?php
class melihat_mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_melihat_mahasiswa');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_melihat_mahasiswa->get_data());
		$this->load->view('look_mahasiswa/v_melihat_mahasiswa',$data);
	}
	}
?>