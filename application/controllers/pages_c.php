<?php

class Pages_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		// $this->load->model('form_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('pages/home',$data);
		} else{
		 	redirect('auth', 'refresh');
		}
	}

	public function status($form){
		$formdb = $form."_c";
		redirect($formdb."/status");
	}


	public function about()
	{
		$this->load->view('pages/about');
	}

	
}