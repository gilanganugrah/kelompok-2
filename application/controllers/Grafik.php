<?php 
 
class Grafik extends CI_Controller {
    function __construct()
	{
        parent::__construct();
        $this->load->model('M_grafik');
    }
    public function index()
    {
        $data['mahasiswa'] = $this->M_grafik->mahasiswa();
        $this->load->view ('grafik/V_grafik', $data);
    }
}
?>