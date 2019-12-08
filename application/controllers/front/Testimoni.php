<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function __construct() {
         parent::__construct();
         $this->load->helper('form','url');
        $this->load->model('M_services');
        
        //load model model_upldgbr yang berada di folder model
    }
	public function index($id_order)
	{
		$get = $this->M_services->GetData2("tb_order ","where id_order = '$id_order'")->result_array();
		$status = $get[0]['status'];
		if ($status=="SELESAI") {
            $cekstatus = $this->form_testimoni($id_order);
            
        }else {
        	$cekstatus = $this->form_status($id_order);
        }
        
		
		$show = array(
			'cekstatus' => $cekstatus
			);
		$this->load->view('front/component/status',$show);
	}

	
	public function form_status($id_order){
		
		$get = $this->M_services->GetData2("tb_order ","where id_order = '$id_order'")->result_array();
		$data = array(
            
            'id_order' => $get[0]['id_order'],
            'merk_sepatu' => $get[0]['merk_sepatu'] ,
            'size_sepatu' => $get[0]['size_sepatu'],
            'ket_sepatu' => $get[0]['ket_sepatu'],
            'jenis_layanan' => $get[0]['jenis_layanan'],
            'status' => $get[0]['status'],
            'alamat' => $get[0]['alamat'],
            
             
        );
        
        $show = $this->load->view('front/component/form_status',$data,TRUE);
        return $show;
	}
	public function form_testimoni($id_order){
		
		$get = $this->M_services->GetData2("tb_order ","where id_order = '$id_order'")->result_array();
		$data = array(
            
            'id_order' => $get[0]['id_order'],
            'merk_sepatu' => $get[0]['merk_sepatu'] ,
            'size_sepatu' => $get[0]['size_sepatu'],
            'ket_sepatu' => $get[0]['ket_sepatu'],
            'jenis_layanan' => $get[0]['jenis_layanan'],
            'status' => $get[0]['status'],
            'alamat' => $get[0]['alamat'],
            
             
        );
        
        $show = $this->load->view('front/component/form_testimoni',$data,TRUE);
        return $show;
	}
	

		
}
