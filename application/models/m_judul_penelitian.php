<?php
class m_judul_penelitian extends CI_Model {
	
	function get_dosen(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}
	
	
	function input($data = array()){
		return $this->db->insert('penelitian',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}