<?php
class m_penentuan_dospem extends CI_Model {
	
	function get_table(){
        return $this->db->get('bimbingan');
    }
  
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('bimbingan');	
    $data = $this->db->get(); 
    return $data->result(); 
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
