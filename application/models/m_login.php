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
	function ambil_user($nama)
	{
		$query = $this->db->get_where($this->tbl, array('nama' => $nama));
		$query = $query->result_array();
		if($query){
			return $query[0];
		}
	}
}

?>