<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model {

	public function GetAccount($where="")
	{
		$data = $this->db->query('select * from tb_account '.$where);
		return $data->result_array();
	}
	public function GetAccount2($where="")
	{
		$data = $this->db->query('select * from tb_account '.$where);
		return $data;
	}


	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function cek_user($data) {
			$query = $this->db->get_where('tb_account', $data);
			return $query;
		}
	

}
