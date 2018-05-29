<?php
class m_inputTA extends CI_Model {
	
	function get_table(){
        return $this->db->get("ta");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM ta");
		return $query->result();
	}
	
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
		return $this->db->insert('ta',$data);
		//return $this->db->update('ta',$data);
	}
	

}
?>