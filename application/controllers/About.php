<?php 

class About extends CI_Controller
{

	public function index()
	{
		$data['title'] = $this->Title_model->setTitle('About Page');

		$this->load->view('templates/header', $data);
		$this->load->view('About/index', $data);
		$this->load->view('templates/footer');
	}

}