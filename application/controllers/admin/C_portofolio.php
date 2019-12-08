<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_portofolio extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
          if ($this->session->userdata('level')!=="1") {
            redirect('login'); }
         $this->load->helper('form','url');
		 $this->load->model('M_portofolio');
	}
	public function index()
	{
		$data = $this->M_portofolio->GetPortofolio();
		$this->load->view('backend/portofolio/portofolio',array('data' => $data));
	}

	public function add()
	{
		$this->load->view('backend/portofolio/form_tambah_portofolio');
	}

    public function do_edit($id_portofolio){
        $get = $this->M_portofolio->GetPortofolio("where id_portofolio = '$id_portofolio'");
        $data = array(
            'id_portofolio' => $id_portofolio,
            'nama_kegiatan' => $get[0]['nama_kegiatan'] ,
            'deskripsi' => $get[0]['deskripsi'],
            'gambar' => $get[0]['gambar'] 
        );
        
        $this->load->view('backend/portofolio/form_edit_portofolio',$data);
    }
    public function do_update(){
        $image = $_FILES['gambar']['name'];
        $id_portofolio = $this->input->post('id_portofolio');
        $get = $this->M_portofolio->GetPortofolio2("where id_portofolio = '$id_portofolio'")->row();
        $gambar = array('gambar' => $get->gambar);
        $where = array('id_portofolio' => $id_portofolio);
        if($image==''){
             $data = array(
                'nama_kegiatan' =>$this->input->post('nama_kegiatan'),
                'deskripsi' =>$this->input->post('deskripsi'),
                'gambar' => $gambar['gambar']);
             
                $this->M_portofolio->UpdateData('tb_portofolio',$data,$where);
                $this->flashdata_succeed();
        
        }else{
            @unlink('./assets/backend/uploads/image/portofolio/'.$get->gambar);
            @unlink('./assets/backend/uploads/image_resize/portofolio/'.$get->gambar);
            $this->set_upload();
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $nama_kegiatan = $this->input->post('nama_kegiatan',TRUE);
                $deskripsi = $this->input->post('deskripsi',TRUE);
                $data = array(
                'nama_kegiatan' => $nama_kegiatan,
                'deskripsi' => $deskripsi,
                'gambar' =>$gbr['file_name']
                 );
                $this->M_portofolio->UpdateData('tb_portofolio',$data,$where); //akses model untuk menyimpan ke database
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
		
		$this->set_upload();

            $this->upload->do_upload('gambar');
            
                $gbr = $this->upload->data();
                $nama_kegiatan = $this->input->post('nama_kegiatan');
                $deskripsi = $this->input->post('deskripsi');
                $data = array(
                'nama_kegiatan' => $nama_kegiatan,
                'deskripsi' => $deskripsi,
                'gambar' =>$gbr['file_name']
                 );

                $this->M_portofolio->InsertData('tb_portofolio',$data); //akses model untuk menyimpan ke database

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
	
	public function do_delete($id_portofolio){
		$where = array('id_portofolio' => $id_portofolio);
		$res = $this->M_portofolio->DeleteData('tb_portofolio',$where);
		if($res>=1){
			$this->flashdata_succeed();
		}
        else{
            $this->flashdata_failed();
        }
	}

	 public function set_upload(){
        
        $config['upload_path'] = './assets/backend/uploads/image/portofolio/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = 7000; //maksimum besar file 3M
        $config['max_width']  = 7000; //lebar maksimum 5000 px
        $config['max_height']  = 7000; //tinggi maksimu 5000 px
        $this->load->library('upload',$config);
    }

    public function ubah_ukuran(){
        $config2['image_library'] = 'gd2'; 
                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config2['new_image'] = './assets/backend/uploads/image_resize/portofolio/'; // folder tempat menyimpan hasil resize
                $config2['maintain_ratio'] = TRUE;
                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
                $config2['height'] = 320; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2);      
    }

     //flashdata
    public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('admin/C_portofolio/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('admin/C_portofolio/index');
    }
}
