<?php
class hasil_review extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_hasil_review');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_hasil_review->get_data());
		$this->load->view('hasil_review/v_hasil_review',$data);
	}
	}
?>