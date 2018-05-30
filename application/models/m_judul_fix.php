<?php
class m_judul_fix extends CI_Model {

	
	function get_mhs(){
		$query = $this->db->query("SELECT * FROM mahasiswa");
		return $query->result();
	}
	
	function get_dosen(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}
	function get_penelitian(){
		$query = $this->db->query("SELECT * FROM penelitian");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('ta_final',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}