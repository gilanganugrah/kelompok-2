<?php
class m_melihat_mahasiswa extends CI_Model {
	
	function get_table(){
        return $this->db->get("ta");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('ta'); 
    $this->db->join('dosen', 'dosen.nip = ta.nip', 'left');
	$this->db->join('mahasiswa', 'mahasiswa.nim = ta.nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>