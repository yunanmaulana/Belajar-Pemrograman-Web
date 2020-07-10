<?php  

	class M_penyakit extends CI_Model{
		public function tampil_data()
		{
			return $this->db->get('penyakit');
		}

		public function input_data($data,$table)
		{
			$this->db->insert($table,$data);
		}

		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function edit_data($where,$table)
		{
			return $this->db->get_where($table,$where);

		}

		public function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		

		public function get_keyword($keyword)
		{
			$this->db->select('*');
			$this->db->from('penyakit');
			$this->db->like('nama_penyakit', $keyword);
			$this->db->or_like('deskripsi_penyakit', $keyword);
			$this->db->or_like('list_gejala', $keyword);
			$this->db->or_like('obat_penanganan', $keyword);
			$this->db->or_like('tingkat_kewaspadaan', $keyword);
			return $this->db->get()->result();

		}
	}

?>