<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	
	public function index(){
		
		$this->load->view('front/login');
	}
	public function auth() {
		$data = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
			);
		$this->load->model('m_account'); // load model_user
		$hasil = $this->m_account->cek_user($data);
		if ($hasil->num_rows() >= 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['username'] = $sess->username;
				$sess_data['nama_account'] = $sess->nama_account;
				$sess_data['id'] = $sess->id;				
				$sess_data['level'] = $sess->level;
				$sess_data['foto_profil'] = $sess->foto_profil;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='2') {
				redirect('welcome');
			}
				
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}