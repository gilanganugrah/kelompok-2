<?php
class hak_akses_dosen extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_ganti_hak_akses_dosen');
	}
	function index(){
		$data = array(
		'data'=>$this->m_ganti_hak_akses_dosen->get_data());
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$this->load->view('ganti_hak_akses_dosen/v_ganti_hak_akses_dosen',$data);
	}
	function edit(){
		$id = $this->uri->segment(3);
		$data = array(
            'user' => $this->m_ganti_hak_akses_dosen->get_data_edit($id),
		);
        //var_dump($data);
     	$data['id_prodi']= $this->m_ganti_hak_akses_dosen->get_prodi();
     	$data['nama_prodi']= $this->m_ganti_hak_akses_dosen->get_prodi();
		$data['id_login']= $this->m_ganti_hak_akses_dosen->get_login();
		$data['level']= $this->m_ganti_hak_akses_dosen->get_login();
		$data['username']= $this->m_ganti_hak_akses_dosen->get_login();
		$this->load->view('dashboard_user');
		$this->load->view('header');
        $this->load->view("ganti_hak_akses_dosen/v_edit_hak_akses", $data);	
	}	
	function update(){
		$id = $this->input->post('nip');
		$insert = $this->m_ganti_hak_akses_dosen->update(array(
                
				'nama_dosen' => $this->input->post('nama_dosen'),
				'kuota' => $this->input->post('kuota'),
				'id_prodi' => $this->input->post('nama_prodi'),
				'id_login' => $this->input->post('level'),
				'username' => $this->input->post('username')
            ), $id);
        redirect('hak_akses_dosen/index');
        }
}