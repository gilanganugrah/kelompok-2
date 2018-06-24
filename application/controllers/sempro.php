<?php
class sempro extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_daftar_sempro');
	}
	function index(){
		$this->load->view('dashboard_user');
		$this->load->view('header');
		$data['nim'] = $this->m_daftar_sempro->get_mhs();
		$this->load->view('sempro/v_daftar_sempro',$data);
	}
	

	function input(){
		
			$config['upload_path']="./assets/file/"; //path folder file upload
        	$config['allowed_types']='gif|jpg|png|jpeg|pdf'; //type file yang boleh di upload
        	$config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
             
            $result= $this->m_daftar_sempro->input(); //kirim value ke model m_upload
            echo json_decode($result);
        }
		if (isset($_POST['btnTambah'])){
			$data = $this->m_daftar_sempro->input(array (
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'tempat' => $this->input->post('tempat'),
			'file' => $this->input->post('file'),
			'nim' => $this->input->post('nim')));
			echo "<script> alert('Anda Berhasil Daftar!!')</script>";
			redirect('sempro/index','refresh');
		}
		else{
			$x =$this->m_daftar_sempro->get_mhs();
			$data = array(
				'nim'=>$this->m_daftar_sempro->get_mhs()
				);
			//var_dump($x);
			echo "<script> alert('Gagal Mendaftar!!')</script>";
			$this->load->view('sempro/v_daftar_sempro',$data);
		}
	}
}