<?php
class m_hasil_review extends CI_Model {
	
	function get_table(){
        return $this->db->get("review");
    }
    
	function get_data(){
	
	$this->db->select('review.*, ta.judul, ta.deskripsi, ta.nim'); 
    $this->db->from('review'); 
    $this->db->join('ta', 'ta.id_ta = review.id_ta', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>