<?php
class m_judul_fix extends CI_Model {

	
	function get_data(){
		$query = $this->db->query("SELECT ta_final.id_final, ta_final.judul, ta_final.tgl_input, ta_final.deskripsi, mahasiswa.nim, mahasiswa.nama, dosen.nip, dosen.nama_dosen,penelitian.judul_penelitian FROM ta_final,mahasiswa,dosen,penelitian WHERE ta_final.nim = mahasiswa.nim and ta_final.nip = dosen.nip and ta_final.id_penelitian = penelitian.id_penelitian");
		return $query->result();
	}
	
	function get_mhs(){
		$query = $this->db->query("SELECT * FROM mahasiswa");
		return $query->result();
	}
	
	function get_dosen(){
		$query = $this->db->query("SELECT * FROM dosen");
		return $query->result();
	}
	function get_penelitian(){
		$query = $this->db->query("SELECT * FROM penelitian");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('ta_final',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}