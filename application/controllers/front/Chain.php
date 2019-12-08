<?php

/**
* 
*/
class Chain extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Mchain');
	}
	
	function index(){		
		$data['option_propinsi'] = $this->Mchain->getPropinsiList();
		$this->load->view('front/component/form_alamat',$data);
	}
	
	function select_kota(){
            if('IS_AJAX') {
        	$data['option_kota'] = $this->Mchain->getKotaList();		
		$this->load->view('front/component/form_kota',$data);
            }
		
	}
        
    /*function submit(){
            echo "Propinsi ID = ".$this->input->post("provinsi_id");
            echo "<br>";
            echo "Kota ID = ".$this->input->post("kota_id");
    }
    */
}
?>
