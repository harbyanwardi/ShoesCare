<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Account extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
         if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_account');
	}
	public function index()
	{
		$data = $this->M_account->GetAccount();
		$this->load->view('backend/account/account',array('data' => $data));
	}
	public function add()
	{
		$this->load->view('backend/account/form_tambah_account');
	}

	public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->M_account->DeleteData('tb_account',$where);
		if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
	}

	public function do_edit($id){
        $get = $this->M_account->GetAccount("where id = '$id'");
        $data = array(
            'id' => $id,
            
            'nama_account' => $get[0]['nama_account'] ,
            'username' => $get[0]['username'],
            'password' => $get[0]['password'],
            'no_telp' => $get[0]['no_telp'],
            'email_pengguna' => $get[0]['email_pengguna'],
            'alamat_pengguna' => $get[0]['alamat_pengguna'],
            'foto_profil' =>$get[0]['foto_profil']
             
        );
        
        $this->load->view('backend/account/form_edit_account',$data);
    }

    public function do_update(){
        $image = $_FILES['foto_profil']['name'];
        $id = $this->input->post('id');
        $get = $this->M_account->GetAccount2("where id = '$id'")->row();
        $foto_profil = array('foto_profil' => $get->foto_profil);
        $where = array('id' => $id);
        if($image==''){
             $data = array(
                
                'nama_account' =>$this->input->post('nama_account'),
                'username' =>$this->input->post('username'),
                'password' => $this->input->post('password'),
                'no_telp' =>$this->input->post('no_telp'),
                'email_pengguna' =>$this->input->post('email_pengguna'),
                'alamat_pengguna' =>$this->input->post('alamat_pengguna'),
                'foto_profil' => $foto_profil['foto_profil']);
             
                $this->M_account->UpdateData('tb_account',$data,$where);
                $this->flashdata_succeed();
        
        }else{
            @unlink('./assets/backend/uploads/image/account/'.$get->foto_profil);
            @unlink('./assets/backend/uploads/image_resize/account/'.$get->foto_profil);
            $this->set_upload();
            if ($this->upload->do_upload('foto_profil'))
            {
                $gbr = $this->upload->data();
               
                $nama_account = $this->input->post('nama_account');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $no_telp = $this->input->post('no_telp');
                $email_pengguna = $this->input->post('email_pengguna');
                $alamat_pengguna = $this->input->post('alamat_pengguna');
                $data = array(
	                
	                'nama_account' => $nama_account,
	                'username' => $username,
                    'password' => $password,
	                'no_telp' => $no_telp,
	                'email_pengguna' => $email_pengguna,
	                'alamat_pengguna' => $alamat_pengguna,
	                'foto_profil' =>$gbr['file_name']
                 );
                $this->M_account->UpdateData('tb_account',$data,$where); //akses model untuk menyimpan ke database
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

	public function do_insert()
	{
		
		$config['upload_path'] = './assets/backend/uploads/image/account/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = 70000; //maksimum besar file 3M
        $config['max_width']  = 70000; //lebar maksimum 5000 px
        $config['max_height']  = 70000; //tinggi maksimu 5000 px
        $this->load->library('upload',$config);

            $this->upload->do_upload('foto_profil');
            
                $gbr = $this->upload->data();
                
                $nama_account = $this->input->post('nama_account');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $no_telp = $this->input->post('no_telp');
                $email_pengguna = $this->input->post('email_pengguna');
                $alamat_pengguna = $this->input->post('alamat_pengguna');
                $data = array(
                
                'nama_account' => $nama_account,
                'username' => $username,
                'password' => $password,
                'no_telp' => $no_telp,
                'email_pengguna' => $email_pengguna,
                'alamat_pengguna' => $alamat_pengguna,
                'foto_profil' =>$gbr['file_name']
                 );

                $this->M_account->InsertData('tb_account',$data); //akses model untuk menyimpan ke database

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

     public function set_upload(){
        
        $config['upload_path'] = './assets/backend/uploads/image/account/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = 7000; //maksimum besar file 3M
        $config['max_width']  = 7000; //lebar maksimum 5000 px
        $config['max_height']  = 7000; //tinggi maksimu 5000 px
        $this->load->library('upload',$config);
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
                redirect('admin/C_Account/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_Account/index');
    }


}
