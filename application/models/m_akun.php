<?php
class m_akun extends CI_Model {

function get_table(){
        return $this->db->get("login");
    }

function get_data(){
		$query = $this->db->query("SELECT * FROM login");
		return $query->result();
	}
	function input($data = array()){
		return $this->db->insert('login',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
		function delete($id){
		$this->db->where('id_login', $id);
        return $this->db->delete('login');
	}
}