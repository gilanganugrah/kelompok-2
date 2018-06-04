<?php
class daftar_judul extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_daftar_judul');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_daftar_judul->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('daftar_judul/v_daftar_judul',$data);
	}
	}
?>