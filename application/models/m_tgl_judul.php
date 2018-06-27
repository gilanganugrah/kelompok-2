<?php
class m_tgl_judul extends CI_Model {
	
	function get_table(){
        return $this->db->get('deadline');
    }
  
	function get_data(){
		$query = $this->db->query("SELECT * FROM deadline");
		return $query->result();
	}
		function delete($id){
		$this->db->where('id_jadwal', $id);
        return $this->db->delete('deadline');
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function input($data = array()){
		return $this->db->insert('deadline',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
}
?>
