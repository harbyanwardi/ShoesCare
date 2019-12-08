<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		 parent::__construct();

        $this->load->helper('form','url');
		 $this->load->model('M_account');
         $this->load->model('M_services');
	}
	public function index()
	{
		
		$this->load->view('front/register');
	}
	

	public function do_insert()
	{
		
		$this->set_upload();

        $this->load->library('upload',$config);

            if ($this->upload->do_upload('foto_profil'))
            {
            
                $gbr = $this->upload->data();
                
                $nama_account = $this->input->post('nama_account');
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                $no_telp = $this->input->post('no_telp');
                $email_pengguna = $this->input->post('email_pengguna');
                
                $level = '2';
                $get = $this->M_services->GetData2("tb_account ","where username = '$username'")->result_array();
                if($nama_account=='' || $username=='' || $password=='' || $no_telp=='' || $email_pengguna==''){
                    $this->flashdata_failed();
                    redirect('front/register');
                }
                else if($username==$get[0]['username']){
                    $this->flashdata_failed2();
                    redirect('front/register');
                }
                else{


                $data = array(
                
                'nama_account' => $nama_account,
                'username' => $username,
                'password' => $password,
                'no_telp' => $no_telp,
                'email_pengguna' => $email_pengguna,
                
                'level' => $level,
                'foto_profil' =>$gbr['file_name'],
                 );

                $this->M_account->InsertData('tb_account',$data);//akses model untuk menyimpan ke database
                }
                $this->ubah_ukuran();      
                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
                redirect('front/register');   
                }
                $this->flashdata_succeed();
                redirect('front/login');
                //pesan yang muncul jika berhasil diupload pada session flashdata

            }else {
                     
                    $this->flashdata_failed();
                    redirect('front/register');
            }//jika berhasil maka akan ditampilkan view upload
                
                
    }
    public function do_edit(){
        $id = $this->session->userdata('id');
        $get = $this->M_account->GetAccount("where id = '$id'");
        $data = array(
            'id' => $id,
            'nama_account' => $get[0]['nama_account'] ,
            
            'no_telp' => $get[0]['no_telp'],
            'email_pengguna' => $get[0]['email_pengguna'],
            
            'foto_profil' => $get[0]['foto_profil'] 
        );
        
        $this->load->view('front/component/edit_profil',$data);
    }
    public function do_update(){
        $image = $_FILES['foto_profil']['name'];
        $id = $this->session->userdata('id');
        $get = $this->M_account->Getaccount2("where id = '$id'")->row();
        $foto_profil = array('foto_profil' => $get->foto_profil);
        $where = array('id' => $id);
        if($image==''){
             $data = array(
                'nama_account' =>$this->input->post('nama_account'),
                
                'no_telp' =>$this->input->post('no_telp'),
                'email_pengguna' =>$this->input->post('email_pengguna'),
                
                'foto_profil' => $foto_profil['foto_profil']);
             
                $res = $this->M_account->UpdateData('tb_account',$data,$where);
                if($res>=1) {
                    $this->flashdata_succeed1();
                    redirect('front/register/do_edit');
                }
                else{
                    $this->flashdata_failed1();
                    redirect('front/register/do_edit');
                }
                
        
        }else{
            @unlink('./assets/backend/uploads/image/account/'.$get->foto_profil);
            @unlink('./assets/backend/uploads/image_resize/account/'.$get->foto_profil);
            $this->set_upload();
            if ($this->upload->do_upload('foto_profil'))
            {
                $gbr = $this->upload->data();
                $nama_account = $this->input->post('nama_account');
                
                $no_telp = $this->input->post('no_telp');
                $email_pengguna = $this->input->post('email_pengguna');
                $alamat_pengguna = $this->input->post('alamat_pengguna');
                $data = array(
                'nama_account' => $nama_account,
                
                'no_telp' => $no_telp,
                'email_pengguna' => $email_pengguna,
                
                'foto_profil' =>$gbr['file_name'],
                 );
                $this->M_account->UpdateData('tb_account',$data,$where); //akses model untuk menyimpan ke database
               $this->ubah_ukuran();

                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
                }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->flashdata_succeed1();
                redirect('front/register/do_edit'); //jika berhasil maka akan ditampilkan view upload
                
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->flashdata_failed1();
                redirect('front/register/do_edit'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
     public function set_upload(){
        
        $config['upload_path'] = './assets/backend/uploads/image/account/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20000'; //maksimum besar file 3M
        $config['max_width']  = '20000'; //lebar maksimum 5000 px
        $config['max_height']  = '20000'; //tinggi maksimu 5000 px
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
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pendaftaran Berhasil !</div></div>");
                
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Pendaftaran Gagal , Isi form secara lengkap !</div></div>");
                
    }
    public function flashdata_succeed1(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit Profil Berhasil !</div></div>");
                
    }
    public function flashdata_failed1(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Edit Profil Gagal !</div></div>");
                
    }
    public function flashdata_failed2(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username sudah digunakan , silahkan gunakan username lain</div></div>");
                
    }


}
