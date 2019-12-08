<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_testimoni extends CI_Controller {

	
	function __construct()
	{
		 parent::__construct();
         if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_testimoni');
	}
	public function index()
	{
		$data = $this->M_testimoni->GetTestimoni();
		$this->load->view('backend/testimoni/testimoni',array('data' => $data));
	}

	public function add()
	{
		$this->load->view('backend/testimoni/form_tambah_testimoni');
	}

	public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->M_testimoni->DeleteData('tb_testimoni',$where);
		if($res>=1){
            $this->flashdata_succeed();
       }
       else{
            $this->flashdata_failed();
        }
	}


	public function do_insert()
	{
		
		$config['upload_path'] = './assets/backend/uploads/image/account/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg|bmp|png|gif';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload',$config);

            $this->upload->do_upload('foto_profil');
            
                $gbr = $this->upload->data();
                $id_ac = $this->input->post('id_ac',TRUE);
                $username = $this->input->post('username');
                $deskripsi_testimoni = $this->input->post('deskripsi_testimoni',TRUE);
                $data = array(
                'id_ac' => $id_ac,
                'username' => $username,
                'deskripsi_testimoni' => $deskripsi_testimoni,
                'foto_profil' =>$gbr['file_name']
                 );

                $this->M_testimoni->InsertData('tb_testimoni',$data); //akses model untuk menyimpan ke database

                $this->ubah_ukuran(); 
                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
                }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                else {
                    $this->flashdata_succeed();
                }//jika berhasil maka akan ditampilkan view upload
                
     }    
             
       
    

     public function do_edit($id){
        $get = $this->M_testimoni->GetTestimoni("where id = '$id'");
        $data = array(
            'id' => $id,
            'id_ac' => $get[0]['id_ac'],
            'username' => $get[0]['username'] ,
            'deskripsi_testimoni' => $get[0]['deskripsi_testimoni'],
            'foto_profil' => $get[0]['foto_profil'] 
        );
        
        $this->load->view('backend/testimoni/form_edit_testimoni',$data);
    }

    public function do_update(){
        $image = $_FILES['foto_profil']['name'];
        $id = $this->input->post('id');
        $get = $this->M_testimoni->GetTestimoni2("where id = '$id'")->row();
        $foto_profil = array('foto_profil' => $get->foto_profil);
        $where = array('id' => $id);
        if($image==''){
             $data = array(
                'id_ac' =>$this->input->post('id_ac'),
                'username' =>$this->input->post('username'),
                'deskripsi_testimoni' => $this->input->post('deskripsi_testimoni'),
                'foto_profil' => $foto_profil['foto_profil']);
             
                $this->M_testimoni->UpdateData('tb_testimoni',$data,$where);
                $this->flashdata_succeed();
        
        }else{
            @unlink('./assets/backend/uploads/image/acount/'.$get->foto_profil);
            @unlink('./assets/backend/uploads/image_resize/account/'.$get->foto_profil);
            $this->set_upload();
            if ($this->upload->do_upload('foto_profil'))
            {
                $gbr = $this->upload->data();
                $id_ac = $this->input->post('id_ac',TRUE);
                $username = $this->input->post('username');
                $deskripsi_testimoni = $this->input->post('deskripsi_testimoni',TRUE);
                $data = array(
                'id_ac' => $id_ac,
                'username' => $username,
                'deskripsi_testimoni' => $deskripsi_testimoni,
                'foto_profil' =>$gbr['file_name']
                 );
                $this->M_testimoni->UpdateData('tb_testimoni',$data,$where); //akses model untuk menyimpan ke database
               $this->ubah_ukuran();

                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->flashdata_succeed(); //jika berhasil maka akan ditampilkan view upload
                
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->flashdata_failed(); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
    

    public function ubah_ukuran(){
        $config2['image_library'] = 'gd2'; 
                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config2['new_image'] = './assets/backend/uploads/image_resize/account/'; // folder tempat menyimpan hasil resize
                $config2['maintain_ratio'] = TRUE;
                $config2['width'] = 150; //lebar setelah resize menjadi 100 px
                $config2['height'] = 150; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2);      
    }
     public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/C_testimoni/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_testimoni/index');
    }
}
