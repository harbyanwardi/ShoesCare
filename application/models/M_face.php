<?php

/**
* 
*/
class M_face extends CI_Model
{
	public function InsertData($table,$data){
		$this->db->insert($table,$data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function GetData($table,$where=""){
		$data = $this->db->query('SELECT * FROM '.$table.$where);
		return $data; 

	}
	public function showdata($table){
		$this->db->order_by('date', 'desc');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function DeleteData($table,$where){
		//$where = $this->db->where('id_contactus', $id);
		$this->db->delete($table,$where);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}