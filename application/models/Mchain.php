<?php
class Mchain extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getKotaList(){
		$result = array();
		$this->db->select('*');
		$this->db->from('kota_kabupaten');
		$this->db->order_by('nama_kota','ASC');
		$array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kota / Kabupaten-';
            $result[$row->kota_id]= $row->nama_kota;
        }
        
        return $result;
	}

	function getKecamatanList(){
		$kota_id = $this->input->post('kota_id');
		$result = array();
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->where('kota_id',$kota_id);
		$this->db->order_by('nama_kecamatan','ASC');
		$array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kecamatan-';
            $result[$row->kecamatan_id]= $row->nama_kecamatan;
        }
        
        return $result;
	}

}
?>
