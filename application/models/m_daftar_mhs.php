<?php
class m_daftar_mhs extends CI_Model {

function get_table(){
        return $this->db->get("mahasiswa");
    }
	
function get_data(){
		$query = $this->db->query("SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.gol, prodi.nama_prodi, login.username FROM 
		mahasiswa,prodi,login where mahasiswa.id_prodi = prodi.id_prodi and mahasiswa.id_login = login.id_login");
		return $query->result();
	}
	
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}
	
	function get_login(){
		$query = $this->db->query("SELECT * FROM login");
		return $query->result();
	}

	function input($data = array()){
		return $this->db->insert('mahasiswa',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
		function delete($id){
		$this->db->where('nim', $id);
        return $this->db->delete('mahasiswa');
	}
}