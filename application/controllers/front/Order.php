<?php

class Order extends CI_Controller
{
	function __construct()
	{
		 parent::__construct();
        $this->load->helper('form','url');
		 $this->load->model('M_order');
		 $this->load->model('M_services');
		 $this->load->model('M_testimoni');
		 $this->load->model('Mchain');
		 if ($this->session->userdata('level')!=="2") {
            redirect('Welcome');
        }
		 
	}
	public function index(){
		$data = array('layanan' => $this->M_services->GetData('tb_services',''), //untuk menampung data dari 3 table
					  'kode_promo' => $this->M_services->GetData('tb_promo',''), // menggunakan satu model 
					  'order' => $this->M_services->GetData('tb_order',''),
					  'option_kota' => $this->Mchain->getKotaList()

			);
		
		$this->load->view('front/component/form_alamat',$data);
	}

	public function do_insert()
	{
		

		$id = $this->session->userdata('id');
		$username = $this->session->userdata('username');
		$merk_sepatu = $_POST['merk_sepatu'];
		$size_sepatu = $_POST['size_sepatu'];
		$ket_sepatu = $_POST['ket_sepatu'];
		$kota_id = $_POST['kota_id'];
		$kecamatan_id = $_POST['kecamatan_id'];
		$alamat_lengkap = $_POST['alamat_lengkap'];
		$cekkota = $this->M_services->GetData2("kota_kabupaten ","where kota_id = '$kota_id'")->result_array();
		$cekkecamatan = $this->M_services->GetData2("kecamatan ","where kecamatan_id = '$kecamatan_id'")->result_array();
		$kota = $cekkota[0]['nama_kota'];
		$kecamatan = $cekkecamatan[0]['nama_kecamatan'];
		$cekongkir = $this->M_services->GetData2("tb_order ","where username = '$username' and status='MENUNGGU PROSES'")->result_array();
		$cekhitung = $this->M_order->Hitung("tb_order ","where username = '$username' and status='MENUNGGU PROSES'");
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$alamat = $alamat_lengkap.'  Kecamatan '.$kecamatan.' '.$kota;
		if($cekhitung>=1){
			$cekstatus = $cekongkir[0]['status'];
			$cekalamat = $cekongkir[0]['alamat'];
			if($cekstatus == 'MENUNGGU PROSES' && $cekalamat == $alamat){
				$ongkir = 0;
			}
			else{
				$ongkir = $cekkecamatan[0]['ongkir'];
			}
			
		}
		else{
			$ongkir = $cekkecamatan[0]['ongkir'];
			
		}
		
		$jenis_layanan = $_POST['jenis_layanan'];
		if($jenis_layanan != 'Recolour') {
			$warna = '';
		}
		$warna = $_POST['warna'];
		$kode_promo = $_POST['kode_promo'];
		$get = $this->M_services->GetData2("tb_promo ","where kode_promo = '$kode_promo'")->result_array(); //mengambil data kode promo dari tabel promo 
		$biaya = $this->M_services->GetData2("tb_services ","where jenis_layanan = '$jenis_layanan'")->result_array();
		if($kode_promo==''){
			$harga = $biaya[0]['harga'];
		}
		else if($kode_promo == $get[0]['kode_promo']){
			
			$harga = ($biaya[0]['harga']-$get[0]['potongan']);
		}
		else{
			$harga = $biaya[0]['harga'];
		}
		$total = $harga + $ongkir;
		if($kota_id=='' || $jenis_layanan=='' || $merk_sepatu=='' || $kecamatan_id=='' || $alamat_lengkap==''){
			$this->flashdata_failed();
		}
		
		else{
				$data_insert = array(
				'id' => $id,	
				'username' => $username,
				'merk_sepatu' => $merk_sepatu,
				'size_sepatu' => $size_sepatu,
				'ket_sepatu' => $ket_sepatu,
				'alamat' => $alamat,
				'jenis_layanan' => $jenis_layanan,
				'warna' => $warna,
				'harga' => $harga,
				'ongkir' => $ongkir,
				'kode_promo' => $kode_promo,
				'total' => $total,
				'tanggal' => $date
			);
			
			$this->load->view('front/component/form_konfirmasi',$data_insert);
		}
		
		
		
		
	}
	
	public function insert() {
	    $this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$this->load->library('email');
		
		//konfigurasi email
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "465";
			$config['smtp_user']= "eighteenshoesclean@gmail.com";
			$config['smtp_pass']= "onaironline";
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
		
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			
		$this->email->initialize($config);

		$this->email->from($this->input->post('from'));
		$this->email->to($this->input->post('to'));
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('isi'));
			//Configure upload.
			
		$this->upload->initialize(array(
        "upload_path"   => "./uploads/",
			"allowed_types" => "*"
			));
			
		$this->email->send();
	    
		$id = $this->session->userdata('id');
		$username = $this->session->userdata('username');
		$merk_sepatu = $_POST['merk_sepatu'];
		$size_sepatu = $_POST['size_sepatu'];
		$ket_sepatu = $_POST['ket_sepatu'];
		$alamat = $_POST['alamat'];
		$jenis_layanan = $_POST['jenis_layanan'];
		$warna = $_POST['warna'];
		$harga = $_POST['total'];
		$kode_promo = $_POST['kode_promo'];
		$status = 'MENUNGGU PROSES';
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		
		
		$data_insert = array(
			'id' => $id,
			'username' => $username,
			'merk_sepatu' => $merk_sepatu,
			'size_sepatu' => $size_sepatu,
			'ket_sepatu' => $ket_sepatu,
			'alamat' => $alamat,
			'jenis_layanan' => $jenis_layanan,
			'warna' => $warna,
			'harga' => $harga,
			'kode_promo' => $kode_promo,
			'status' => $status,
			'tanggal' => $date
		);
		
		$res = $this->M_order->InsertData('tb_order',$data_insert);
		$result = $this->M_order->InsertData('tb_history',$data_insert);
		if($res>=1){
		    $this->flashdata_succeed1();
			redirect('front/Order/cekstatus');
		}
	}
	public function cekstatus(){
		$username = $this->session->userdata('username');
		$data = $this->M_services->GetData2("tb_order ","where username = '$username'")->result_array();
		
		
		$this->load->view('front/component/cekstatus',array('data' => $data));
	}
	
	public function testi() {
		$id = $this->session->userdata('id');
		$username = $this->session->userdata('username');
		$foto_profil = $this->session->userdata('foto_profil');
		$deskripsi_testimoni = $_POST['deskripsi_testimoni'];
		if($deskripsi_testimoni==''){
			redirect('Welcome');
		}
		else{
			$data = array(
				
				'username' => $username,
				'foto_profil' => $foto_profil,
				'deskripsi_testimoni' => $deskripsi_testimoni
			);
			$res = $this->M_testimoni->InsertData('tb_testimoni',$data);
			if($res>=1){
				echo "<script>alert('Terima kasih , testimoni anda akan kami terima');history.go(-1);</script>";
				redirect('Welcome');
			}
		}
	}
	
	function select_kecamatan()
	{ //memilih kota lewat ajax
            if('IS_AJAX') {
        	$data['option_kecamatan'] = $this->Mchain->getKecamatanList();		
		$this->load->view('front/component/form_kecamatan',$data);
            }
		
	}
	function submit(){
            echo "Propinsi ID = ".$this->input->post("kota_id");
            echo "<br>";
            echo "Kota ID = ".$this->input->post("kecamatan_id");
    }
     public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Isi form secara lengkap !!!</div></div>");
                redirect('front/order/index');
    }
    
    public function flashdata_succeed1(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Order Berhasil !</div></div>");
                
    }
}
	

