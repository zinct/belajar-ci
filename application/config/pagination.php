<?php 

		//Config Pagination
		$config['base_url'] = 'http://localhost/ci-app/People/index';
		$config['per_page'] = 12;
		

		//Start Page
		

		//Customize With Bootstraps

		// Full Tag Open
		$config['full_tag_open'] = '<nav aria-label="Page navigation example">
  										<ul class="pagination  justify-content-center">';
  		$config['full_tag_close'] = '  </ul>
										</nav>';
		// Enable First/Last Link
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';

		// First Tag code
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		// Last Tag Code
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		// Enable Next/Prev Link
		$config['next_link'] = '&raquo';
		$config['prev_link'] = '&laquo';

		// Next Tag Code
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		// Prev Tag Code
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';	

		// <li> on <a> Tag Code
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		// Current active | note* Not Include <a href="#"></a>
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		// Number of Side next and prev
		$config['num_links'] = 11;

		 // Attribute In <a href="#"></a>  
		$config['attributes'] = ['class' => 'page-link'];