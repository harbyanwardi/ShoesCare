<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {

	public function GetOrder($where="")
	{

		$data = $this->db->query('select * from tb_order '.$where);
		return $data->result_array();
	}
	public function showdata($table){
		
	    $this->db->order_by('id_order', 'desc');
		$data = $this->db->get($table);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}
	public function GetTransaksi($where="")
	{
		$data = $this->db->query('select * from tb_history '.$where);
		return $data->result_array();
	}
	public function GetOrder2($where="")
	{
		$data = $this->db->query('select * from tb_order '.$where);
		return $data;
	}
	public function GetTransaksi2($where="")
	{
		$data = $this->db->query('select * from tb_history '.$where);
		return $data;
	}
	public function GetData($tableName,$where="")
	{
		$data = $this->db->query('select * from tb_order'.$tableName.$where);
		return $data->result_array();
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
	function Hitung($tableName,$where=""){
		$data = $this->db->query('select * from '.$tableName.$where);
		$total = $data->num_rows(); 
		return $total;
	}
	
}
