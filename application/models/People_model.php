<?php  

class People_model extends CI_Model 
{

	public function getAllPeople()
	{
		return $this->db->get('tb_peoples')->result_array();

	}

	public function getPeople($start, $sumData, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('nama', $keyword);
		}

		return $this->db->get('tb_peoples', $sumData, $start)->result_array();
	}

	public function getCountData()
	{
		return $this->db->get('tb_peoples')->num_rows();
	}

	public function deletePeep($id)
	{
		return $this->db->delete('tb_peoples', ['id' => $id]);
	}

	public function getCountResult()
	{
		return $this->db->count_all_results();
	}

}