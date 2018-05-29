<?php
class m_daftar_judul extends CI_Model {
	
	function get_table(){
        return $this->db->get("penelitian");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM penelitian");
		return $query->result();
	}
	}
?>