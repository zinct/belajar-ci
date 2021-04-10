<?php 

class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = $this->Title_model->setTitle('List Of Mahasiswa');
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		if (isset($_POST['search'])) {
			$data['mahasiswa'] = $this->Mahasiswa_model->search();
		}
		else {
			$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('Mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('nis', 'Identity Number', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Major', 'required');

		$data['jurusan'] = $this->Mahasiswa_model->getJurusan();
		$data['title'] = $this->Title_model->setTitle('Insert Mahasiswa');
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('Mahasiswa/insert', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Mahasiswa_model->insert();
			$this->session->set_flashdata('success', 'Inserted');
			redirect(base_url() . 'mahasiswa');
		}
	}

	public function delete($id)
	{
		$this->Mahasiswa_model->delete($id);
		$this->session->set_flashdata('warning', 'Deleted');
		redirect(base_url() . 'mahasiswa');
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('nis', 'Identity Number', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Major', 'required');

		$data['jurusan'] = $this->Mahasiswa_model->getJurusan();


		if ($this->form_validation->run() == FALSE) {
			$data['title'] = $this->Title_model->setTitle('Insert Mahasiswa');
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaWhereId($id);
			$data['title'] = $this->Title_model->setTitle('Update Data Form');

			$this->load->view('templates/header', $data);
			$this->load->view('Mahasiswa/update', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Mahasiswa_model->update($id);
			$this->session->set_flashdata('success', 'Update');
			redirect(base_url() . 'mahasiswa');
		}
	}

}