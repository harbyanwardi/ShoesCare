<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_combo extends CI_Model {

	public function GetCombo()
	{
		$data = $this->db->get('kota');
		return $data->result_array();
	}
	public function GetKecamatan($id_kota)
	{
		$data = $this->db->get_where('kecamatan', array('id_kota' => $id_kota));
		return $data->result;
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
