<?php
class m_review_judul extends CI_Model {
	
	function get_ta(){
		$query = $this->db->query("SELECT * FROM ta");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('review',$data);
		
	}
	

}
?>