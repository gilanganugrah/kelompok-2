<?php    
class M_grafik extends CI_Model{
	function get_table(){
		return $this->db->get('mahasiswa');
	}
    function mahasiswa(){
        $query = $this->db->query("SELECT * from mahasiswa");
         
        if(count ($query)> 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
?>