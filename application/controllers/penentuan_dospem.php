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
	
	function edit($nip){
		$where = array('nip' => $nip);
		$data['bimbingan'] = $this->m_penentuan_dospem->edit_data($where,'bimbingan')->result();
		$this->load->view('form_penentuan_dospem/v_edit',$data);
	}
	
	function update(){
	$id_bimbingan = $this->input->post('id_bimbingan');
	$id_ta = $this->input->post('id_ta');
	$nim = $this->input->post('nim');
	$nip = $this->input->post('nip');
	$nama_dosen = $this->input->post('nama_dosen');
	$nama = $this->input->post('nama');
	$nama_prodi = $this->input->post('nama_prodi');
	$judul = $this->input->post('judul');

	$data = array(
		'id_bimbingan' => $id_bimbingan,
		'id_ta' => $id_ta,
		'nim' => $nim,
		'nip' => $nip,
		'nama_dosen' => $nama_dosen,
		'nama' => $nama,
		'nama_prodi' => $prodi,
		'judul' => $judul
	);

	$where = array('nip' => $nip);
	

	$this->m_penentuan_dospem->update_data($where,$data,'bimbingan');
	redirect('penentuan_dospem/index');
}

}
?>