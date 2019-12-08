<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testimoni extends CI_Model {

	public function GetTestimoni($where="")
	{
		$data = $this->db->query('select * from tb_testimoni '.$where);
		return $data->result_array();
	}
	public function GetTestimoni2($where="")
	{
		$data = $this->db->query('select * from tb_testimoni '.$where);
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

	

}
