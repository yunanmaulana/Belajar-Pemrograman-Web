<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registrasi extends CI_Controller {

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

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password_1', 'password', 'required|matches[password_2]');
		$this->form_validation->set_rules('password_2', 'password', 'required|matches[password_1]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('dokter/registrasi');
		} else {
			$data = array (
				'id' => '',
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_1'),
				'level' => 'dokter',
				'role_id' => 2,
			);

			$this->db->insert('user', $data);
			redirect('dokter/auth');
		}	
		
	
	}

	
}