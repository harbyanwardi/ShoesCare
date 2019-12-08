<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		 parent::__construct();
		 if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_order');
	}

	public function index()
	{
		$data = $this->M_order->showdata('tb_order');
		$this->load->view('backend/index',array('data' => $data));
	}

	public function add()
	{
		$this->load->view('backend/order/form_tambah_order');
	}

	public function do_insert()
	{
		$id = $this->session->userdata('id');
		$username = $_POST['username'];
		$merk_sepatu = $_POST['merk_sepatu'];
		$size_sepatu = $_POST['size_sepatu'];
		$ket_sepatu = $_POST['ket_sepatu'];
		$tanggal = date('Y-m-d H:i:s');
		$alamat = $_POST['alamat'];
		$alamat_kembali = $_POST['alamat_kembali'];
		$jenis_layanan = $_POST['jenis_layanan'];
		$harga = $_POST['harga'];
		$status = $_POST['status'];
		$data_insert = array(
			'username' => $username,
			'merk_sepatu' => $merk_sepatu,
			'size_sepatu' => $size_sepatu,
			'ket_sepatu' => $size_sepatu,
			'alamat' => $alamat,
			
			'jenis_layanan' => $jenis_layanan,
			'harga' => $harga,
			'tanggal' => $tanggal,
			'status' => $status

		);
		$res = $this->M_order->InsertData('tb_order',$data_insert);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}
	public function do_delete($id_order){
		$where = array('id_order' => $id_order);
		$res = $this->M_order->DeleteData('tb_order',$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}

	public function do_edit($id_order){
		$get = $this->M_order->Getorder("where id_order = '$id_order'");
        $data = array(
            'id_order' => $id_order,
            'username' => $get[0]['username'],
            'merk_sepatu' => $get[0]['merk_sepatu'],
            'size_sepatu' => $get[0]['size_sepatu'],
            'ket_sepatu' => $get[0]['ket_sepatu'],
        	'tanggal' => $get[0]['tanggal'],
        	'alamat' => $get[0]['alamat'],
        	
        	'jenis_layanan' => $get[0]['jenis_layanan'],
        	'harga' => $get[0]['harga'],
        	'status' => $get[0]['status'],
        );
        
        $this->load->view('backend/order/form_edit_order',$data);
    }
	public function do_update(){
		$id_order = $this->input->post('id_order');
		
		$get = $this->M_order->Getorder2("where id_order = '$id_order'")->row();
		$where = array('id_order' => $id_order);
		$data = array(
			'username' => $this->input->post('username'),
			'merk_sepatu' =>$this->input->post('merk_sepatu'),
			'size_sepatu' =>$this->input->post('size_sepatu'), 
			'ket_sepatu' =>$this->input->post('ket_sepatu'),
			
			'alamat' =>$this->input->post('alamat'),
			
			'jenis_layanan' =>$this->input->post('jenis_layanan'),
			'harga' =>$this->input->post('harga'),
			'status' =>$this->input->post('status'),
		);
		
		$res = $this->M_order->UpdateData('tb_order',$data,$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
		else{
			$this->flashdata_failed();
		}
	}
	public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/Admin/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/Admin/index');
    }	
	
}
