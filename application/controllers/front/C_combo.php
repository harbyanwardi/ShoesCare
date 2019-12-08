<?php

/**
* 
*/
class C_combo extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_combo');
	}
	public function index(){
		
		$data['kota'] = $this->M_combo->GetCombo();
		$this->load->view('front/component/form_combo',$data);
	}
	public function get_kecamatan(){
		$id_kota = $this->input->post('id_kota');
		$kecamatan = $this->M_combo->GetKecamatan($id_kota);
		if(count($kecamatan)>0){
			$pro_select_box = '';
			$pro_select_box .= '<option value="">Pilih Kecamatan</option>';
			foreach($kecamatan as $camat) {
				$pro_select_box .= '<option value="'.$camat->id_kecamatan.'">'.$camat->nama_kecamatan.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
	
}