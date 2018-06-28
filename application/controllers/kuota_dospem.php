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
	
	function edit(){
		$id = $this->uri->segment(3);
		$data = array(
            'user' => $this->m_kuota_dospem->get_data_edit($id),
		);
        //var_dump($data);
     	$data['id_prodi']= $this->m_kuota_dospem->get_prodi();
     	$data['nama_prodi']= $this->m_kuota_dospem->get_prodi();
		$data['id_login']= $this->m_kuota_dospem->get_login();
		$this->load->view('dashboard_user');
		$this->load->view('header');
        $this->load->view("kuota_max_dospem/v_edit", $data);
	
		
	}
	
	function update(){
		$id = $this->input->post('nip');
		$insert = $this->m_kuota_dospem->update(array(
                
				'nama_dosen' => $this->input->post('nama_dosen'),
				'kuota' => $this->input->post('kuota'),
				'id_prodi' => $this->input->post('nama_prodi'),
				'id_login' => $this->input->post('id_login'),
            ), $id);
        redirect('kuota_dospem/index');
        }
}
?>