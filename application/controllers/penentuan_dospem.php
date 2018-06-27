<?php
class penentuan_dospem extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_penentuan_dospem');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_penentuan_dospem->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('form_penentuan_dospem/v_penentuan_dospem',$data);
	}
	
	function edit($id_bimbingan){
	$where = array('bimbingan' => $id_bimbingan);
	$data['user'] = $this->m_penentuan_dospem->edit_data($where,'bimbingan')->result();
	$this->load->view('dashboard_user');
		$this->load->view('header');
	$this->load->view('v_edit_dospem',$data);
 		
	}
	
	
	function update(){
	$id_bimbingan = $this->input->post('id_bimbingan');
	$id_ta = $this->input->post('id_ta');
	$nim = $this->input->post('nim');
	$nip = $this->input->post('nip');

	$data = array(
		'id_bimbingan' => $id_bimbingan,
		'id_ta' => $id_ta,
		'nim' => $nim,
		'nip' => $nip,

	);

	$where = array('id_bimbingan' => $bimbingan);
	

	$this->m_penentuan_dospem->update_data($where,$data,'bimbingan');
	redirect('penentuan_dospem/index');
}

}
?>