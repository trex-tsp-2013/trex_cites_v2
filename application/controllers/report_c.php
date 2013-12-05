<?php

class Report_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('report_model');
	}

	public function getform()
	{
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$data['count'] = $this->report_model->get_formrow('form15','Verified');
		$data['count2'] = $this->report_model->get_formrow('form15','Denied');
		$data['count3'] = $this->report_model->get_formrow('form15','Pending');
		$this->load->view('officers/report/form-report', $data);
	}

	

}