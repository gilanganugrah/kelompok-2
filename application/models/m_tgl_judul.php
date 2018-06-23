<?php
class m_tgl_judul extends CI_Model {
	
	function get_table(){
        return $this->db->get('deadline');
    }
  
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('deadline'); 
    $data = $this->db->get(); 
    return $data->result(); 
	}
	
	function tampil_data(){
		return $this->db->get('deadline');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	}
?>
