<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_features extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
        if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_features');
	}
	public function index()
	{
		$data = $this->M_features->GetFeatures();
		$this->load->view('backend/features/features',array('data' => $data));
	}

	public function add()
	{
		$this->load->view('backend/features/form_tambah_features');
	}

	public function do_insert()
	{
		$nama_features = $_POST['nama_features'];
		$deskripsi = $_POST['deskripsi'];
		$data_insert = array(
			'nama_features' => $nama_features,
			'deskripsi' => $deskripsi 
		);
		$res = $this->M_features->InsertData('tb_features',$data_insert);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}
	public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->M_features->DeleteData('tb_features',$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}

	public function do_edit($id){
		$get = $this->M_features->GetFeatures("where id = '$id'");
        $data = array(
            'id' => $id,
            'nama_features' => $get[0]['nama_features'],
            'deskripsi' => $get[0]['deskripsi']
            
        );
        
        $this->load->view('backend/features/form_edit_features',$data);
    }
	public function do_update(){
		$id = $this->input->post('id');
		
		$get = $this->M_features->GetFeatures2("where id = '$id'")->row();
		$where = array('id' => $id);
		$data = array(
			'nama_features' => $this->input->post('nama_features'),
			'deskripsi' =>$this->input->post('deskripsi') 
		);
		
		$res = $this->M_features->UpdateData('tb_features',$data,$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}

	public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/C_features/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_features/index');
    }
}
