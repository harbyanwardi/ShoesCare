<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
		 if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_about');
	}
	
	public function index()
	{
		$data = $this->M_about->GetAbout();
		$this->load->view('backend/about/about',array('data' => $data));

	}
	public function do_edit($id){
        $get = $this->M_about->GetAbout("where id = '$id'");
        $data = array(
            'id' => $id,
            'deskripsi' => $get[0]['deskripsi'],
            
        );
        
        $this->load->view('backend/about/form_edit_about',$data);
    }

	public function do_update(){

		$id = $this->input->post('id');
		
		$get = $this->M_about->GetAbout2("where id = '$id'")->row();
		$where = array('id' => $id);
		$data = array(
			'deskripsi' =>$this->input->post('deskripsi') 
		);
		
		$res = $this->M_about->UpdateData('tb_about',$data,$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}

	public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/C_about/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_about/index');
    }
	
}
