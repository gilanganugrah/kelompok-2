<?php
class kuota_dospem extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_kuota_dospem');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_kuota_dospem->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('kuota_max_dospem/v_kuota_dospem',$data);
	}
	
	function edit($nip){
		$where = array('nip' => $nip);
		$data['dosen'] = $this->m_kuota_dospem->edit_data($where,'dosen')->result();
		$this->load->view('kuota_max_dospem/v_edit',$data);
	}
	
	function update(){
	$nip = $this->input->post('nip');
	$nama_dosen = $this->input->post('nama_dosen');
	$prodi = $this->input->post('prodi');
	$kuota = $this->input->post('kuota');

	$data = array(
		'nama_dosen' => $nama_dosen,
		'prodi' => $prodi,
		'kuota' => $kuota
	);

	$where = array('nip' => $nip);
	

	$this->m_kuota_dospem->update_data($where,$data,'dosen');
	redirect('kuota_dospem/index');
}

}
?>