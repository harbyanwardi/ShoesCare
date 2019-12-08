<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
         parent::__construct();
         $this->load->helper('form','url');
        $this->load->model('M_services');
        $this->load->model('M_portofolio');
        $this->load->model('M_testimoni');
        $this->load->model('M_features');
        $this->load->model('M_about');
        //load model model_upldgbr yang berada di folder model
    }
	public function index()
	{
		if ($this->session->userdata('level')=="2") {
            $nav = $this->nav_member();
            $contact = $this->contact_general();
            $about = $this->aboutus_member();
        }else {
        	$nav= $this->nav_general();
        	$contact = $this->contact_general();
        	$about = $this->aboutus();
        }
        
		$data = array();
		$show = array(
			'about' => $about,
			'services'=> $this->services(),
			'portofolio' => $this->portofolio(),
			'portofolio_modal' => $this->portofolio_modal(),
			'features' => $this->features(),
			'nav' => $nav,
			'contact' => $contact,
			'testimoni' => $this->testimoni());
		$this->load->view('front/index',$show);
	}

	
	public function aboutus(){
		$data = array('data'=> $this->M_about->GetAbout(""));
		$show = $this->load->view('front/component/aboutus',$data,TRUE);
		return $show;
	}
	
	public function aboutus_member(){
		$data = array('data'=> $this->M_about->GetAbout(""));
		$show = $this->load->view('front/component/aboutus_member',$data,TRUE);
		return $show;
	}
	

	public function portofolio(){
		$data = array('data'=> $this->M_portofolio->GetPortofolio(""));
		$show = $this->load->view('front/component/portofolio',$data,TRUE);
		return $show;
	}
	public function portofolio_modal(){
		$data = array('data'=> $this->M_portofolio->GetPortofolio(""));
		$show = $this->load->view('front/component/portofolio_modal',$data,TRUE);
		return $show;
	}		
	public function services(){
		$data = array('data'=> $this->M_services->GetServices(""));
		$show = $this->load->view('front/component/services',$data,TRUE);
		return $show;
	}

	public function testimoni(){
		$data = array('data' => $this->M_testimoni->GetTestimoni(""));
		$show = $this->load->view('front/component/testimoni',$data,TRUE);
		return $show;
	}
	public function features(){
		$data = array('data' => $this->M_features->GetFeatures(""));
		$show = $this->load->view('front/component/features',$data,TRUE);
		return $show;
	}

	public function nav_general(){
		$data = array();
		$show = $this->load->view('front/component/nav_general',$data,TRUE);
		return $show;
	}
	public function nav_member(){
		$data = array();
		$show = $this->load->view('front/component/nav_member',$data,TRUE);
		return $show;
	}
	
	public function contact_general(){
		$data = array();
		$show = $this->load->view('front/component/contact_general',$data,TRUE);
		return $show;
	}
	
}
