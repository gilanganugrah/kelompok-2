<?php
class m_judul_penelitian extends CI_Model {


function get_data(){
		$query = $this->db->query("SELECT penelitian.id_penelitian , penelitian.judul_penelitian, penelitian.kuota, dosen.nip, dosen.nama_dosen FROM  penelitian,dosen WHERE penelitian.nip = dosen.nip");
		return $query->result();
	}
	
function get_pnt(){
		$query = $this->db->query("SELECT * FROM penelitian");
		return $query->result();
	}
	
	function get_dosen(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}

	function input($data = array()){
		return $this->db->insert('penelitian',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
}