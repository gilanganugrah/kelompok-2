<?php
class m_daftar_judul extends CI_Model {
	
	function get_table(){
        return $this->db->get("penelitian");
    }
    
	function get_data(){
	
	$this->db->select('penelitian.*, dosen.nama_dosen'); 
    $this->db->from('penelitian'); 
    $this->db->join('dosen', 'dosen.nip = penelitian.nip', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>