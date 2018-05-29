<?php
class m_hasil_review extends CI_Model {
	
	function get_table(){
        return $this->db->get("review");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('review'); 
    $this->db->join('ta', 'ta.id_ta = review.id_ta', 'left');
	$this->db->join('mahasiswa', 'mahasiswa.nim = ta.nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>