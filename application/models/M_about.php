<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

	public function GetAbout($where="")
	{
		$data = $this->db->query('select * from tb_about '.$where);
		return $data->result_array();
	}
	public function GetAbout2($where="")
	{
		$data = $this->db->query('select * from tb_about '.$where);
		return $data;
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
