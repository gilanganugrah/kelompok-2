<?php
class m_daftar_sempro extends CI_Model {

	
	function get_mhs(){
		$query = $this->db->query("SELECT * FROM mahasiswa");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('proposal',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}