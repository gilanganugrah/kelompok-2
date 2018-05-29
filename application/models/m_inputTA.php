<?php
class m_inputTA extends CI_Model {
	
function tampil_data(){
		return $this->db->get('ta');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function get_nip(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}
}
?>