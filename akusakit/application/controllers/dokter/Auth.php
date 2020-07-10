<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('dokter/login');
	
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('dokter/login');
		} else{
			$auth = $this->M_auth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username dan Password Anda Salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
					</div>');
				redirect('dokter/auth');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);
				switch($auth->role_id){
					case 1 : redirect('dokter/home');
							break;
					case 2 : redirect('dokter/home');
							break; 
					default : break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('dashboard');
	}
}