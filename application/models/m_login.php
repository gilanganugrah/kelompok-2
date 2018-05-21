<?php
class M_login extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "login";
	}
	
	function cek_user($username="",$password="")
	{
		$query = $this->db->get_where($this->tbl,array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}
	public function register($data_insert){
			$this->db->insert('login', $data_insert);
	}
		
	function ambil_user($nama)
	{
		$query = $this->db->get_where($this->tbl, array('nama' => $nama));
		$query = $query->result_array();
		if($query){
			return $query[0];
		}
	}
	function get_data(){
		$query = $this->db->query("SELECT * FROM login");
		return $query->result();
	}
	function input($data = array()){
		return $this->db->insert('login',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}

?>