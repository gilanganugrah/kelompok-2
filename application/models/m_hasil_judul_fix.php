<?php
class m_hasil_judul_fix extends CI_Model {
	
	function get_table(){
        return $this->db->get("ta_final");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('ta_final'); 
    $this->db->join('dosen', 'dosen.nip = ta_final.nip', 'left');
	$this->db->join('mahasiswa', 'mahasiswa.nim = ta_final.nim', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>