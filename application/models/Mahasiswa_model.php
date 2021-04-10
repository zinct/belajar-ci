<?php 

class Mahasiswa_model extends CI_Model
{

	public function getAllMahasiswa()
	{
		return  $this->db->get('tb_mahasiswa')->result_array();
	}

	public function getMahasiswaWhereId($id)
	{
		// $this->db->where('id', $id);
		return $this->db->get_where('tb_mahasiswa', ['id' => $id])->row_array();
	}

	public function getJurusan()
	{
		return $this->db->get('tb_jurusan')->result_array();
	}

	public function insert()
	{
		$dataPost = [
			'nama' => $this->input->post('nama', true),
			'nis' => $this->input->post('nis', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->insert('tb_mahasiswa', $dataPost);
	}

	public function delete($id)
	{
		// $this->db->where('id', $id);
		$this->db->delete('tb_mahasiswa', ['id' => $id]);
	}

	public function update($id)
	{
		$this->db->where('id', $id);
		$dataPost = [
			'nama' => $this->input->post('nama', true),
			'nis' => $this->input->post('nis', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->update('tb_mahasiswa', $dataPost);
	}

	public function search()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('tb_mahasiswa')->result_array();
	}

}