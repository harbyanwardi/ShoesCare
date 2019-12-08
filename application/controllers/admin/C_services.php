<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_services extends CI_Controller {

	
	function __construct()
	{
		 parent::__construct();
        if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_services');
	}
	public function index()
	{
		$data = $this->M_services->GetServices();
		$this->load->view('backend/services/services',array('data' => $data));
	}
	public function add()
	{
		$this->load->view('backend/services/form_tambah_service');
	}
	public function do_insert()
	{
		
		$jenis_layanan = $_POST['jenis_layanan'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $icon = $_POST['icon'];
        $data_insert = array(
            'nama_features' => $nama_features,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'icon' => $icon 
        );
        $res = $this->M_features->InsertData('tb_services',$data_insert);
        if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
 
    }
    public function do_delete($id_services){
		$where = array('id_services' => $id_services);
		$res = $this->M_services->DeleteData('tb_services',$where);
		if($res>=1){
			$this->flashdata_succeed();
	   }
       else{
            $this->flashdata_failed();
        }
    }

	public function do_edit($id_services){
        $get = $this->M_services->Getservices("where id_services = '$id_services'");
        $data = array(
            'id_services' => $id_services,
            'jenis_layanan' => $get[0]['jenis_layanan'] ,
            'deskripsi' => $get[0]['deskripsi'],
            'harga' => $get[0]['harga'],
            'icon' => $get[0]['icon']
            
        );
        
        $this->load->view('backend/services/form_edit_services',$data);
    }

    public function do_update(){
            $id_services = $this->input->post('id_services');
        
        $get = $this->M_services->Getservices2("where id_services = '$id_services'")->row();
        $where = array('id_services' => $id_services);
        $data = array(
            'jenis_layanan' => $this->input->post('jenis_layanan'),
            'deskripsi' =>$this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'icon' => $this->input->post('icon')
        );
        
        $res = $this->M_services->UpdateData('tb_services',$data,$where);
        if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
    }
    
   
	
	 //flashdata
    public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/C_services/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_services/index');
    }
}
