<?php
class m_kuota_dospem extends CI_Model {
	
	function get_table(){
        return $this->db->get('dosen');
    }
  
	function get_data(){
	$query = $this->db->query("SELECT dosen.nip ,dosen.nama_dosen, dosen.kuota, prodi.nama_prodi FROM dosen,prodi WHERE dosen.id_prodi = prodi.id_prodi");
		return $query->result();	
	}
	
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM prodi");
		return $query->result();
	}
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM dosen WHERE nip = '$id'");
		return $query->result_array();
	}

	function update($data = array(),$id){
		$this->db->where('nip',$id);
		return $this->db->update('dosen',$data);
	}
	}
?>
