<?php  

class Penyakit extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') !='2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
					</div>');
			redirect('dokter/auth');
		}
	}
	
	public function index()
	{
		$data['penyakit'] = $this->M_penyakit->tampil_data()->result();
		$this->load->view('templates_dokter/header');
		$this->load->view('templates_dokter/sidebar');
		$this->load->view('dokter/vw_penyakit', $data);
		$this->load->view('templates_dokter/footer');
	}

	public function tambah_aksi()
	{
		$nama_penyakit			= $this->input->post('nama_penyakit');
		$deskripsi_penyakit		= $this->input->post('deskripsi_penyakit');
		$list_gejala			= $this->input->post('list_gejala');
		$obat_penanganan		= $this->input->post('obat_penanganan');
		$tingkat_kewaspadaan	= $this->input->post('tingkat_kewaspadaan');

		$data = array(
			'nama_penyakit'			=> $nama_penyakit,
			'deskripsi_penyakit'	=> $deskripsi_penyakit,
			'list_gejala'			=> $list_gejala,
			'obat_penanganan'		=> $obat_penanganan,
			'tingkat_kewaspadaan'	=> $tingkat_kewaspadaan
		);

		$this->M_penyakit->input_data($data, 'penyakit');
		redirect('dokter/penyakit');
	}

	public function hapus($no)
	{
		$where = array('no' => $no);
		$this->M_penyakit->hapus_data($where,'penyakit');
		redirect ('dokter/penyakit');
	}

	public function edit($no)
	{
		$where = array('no' => $no);
		$data['penyakit'] = $this->M_penyakit->edit_data($where,'penyakit')->result();

		$this->load->view('templates_dokter/header');
		$this->load->view('templates_dokter/sidebar');
		$this->load->view('dokter/vw_edit', $data);
		$this->load->view('templates_dokter/footer');
	}

	public function update()
	{
		$no 					= $this->input->post('no');
		$nama_penyakit 			= $this->input->post('nama_penyakit');
		$deskripsi_penyakit 	= $this->input->post('deskripsi_penyakit');
		$list_gejala 			= $this->input->post('list_gejala');
		$obat_penanganan		= $this->input->post('obat_penanganan');
		$tingkat_kewaspadaan 	= $this->input->post('tingkat_kewaspadaan');

		$data = array(
			'nama_penyakit'			=> $nama_penyakit,
			'deskripsi_penyakit'	=> $deskripsi_penyakit,
			'list_gejala'			=> $list_gejala,
			'obat_penanganan'		=> $obat_penanganan,
			'tingkat_kewaspadaan'	=> $tingkat_kewaspadaan,
		);

		$where = array(
			'no' => $no
		);

		$this->M_penyakit->update_data($where,$data,'penyakit');

		redirect('dokter/penyakit');

	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['penyakit'] = $this->M_penyakit->get_keyword($keyword);
		$this->load->view('templates_dokter/header');
		$this->load->view('templates_dokter/sidebar');
		$this->load->view('dokter/vw_penyakit', $data);
		$this->load->view('templates_dokter/footer');
	}

	
}

?>