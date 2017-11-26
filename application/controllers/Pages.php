<?php
	/**
	* When creating a Controller, Create a Class that 
	* inherits the CI_Controller Class, 
	* Remember your OOP Fundamentals
	*/
	class Pages extends CI_Controller
	{
		public function view($page = 'home')
		{
			// This condition checks when the php file exists
			// The APPPATH constant is the folder of the CodeIgniter
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();	//CodeIgniter Function to load a 404 not found error
			}

			// Creates a variable inside the Data Array
			// To pass to the View, Remember that controllers pass data into the view
			$data['title'] = ucfirst($page);

			// Loads the Page
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');

		}
	}