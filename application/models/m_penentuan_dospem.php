<?php
class m_penentuan_dospem extends CI_Model {
	
	function get_table(){
        return $this->db->get('bimbingan');
    }
  
	
	function get_data(){
		$query = $this->db->query("SELECT bimbingan.id_bimbingan ,ta.id_ta ,mahasiswa.nim, dosen.nip  FROM bimbingan,ta,mahasiswa,dosen WHERE bimbingan.id_ta = ta.id_ta and bimbingan.nim = mahasiswa.nim and bimbingan.nip = dosen.nip");
		return $query->result();
	}
	function delete($id){
		$this->db->where('id_bimbingan', $id);
        return $this->db->delete('bimbingan');
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function input($data = array()){
		return $this->db->insert('bimbingan',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
}
?>