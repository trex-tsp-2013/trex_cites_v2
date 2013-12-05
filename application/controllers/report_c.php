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
		
		$data['v13'] = $this->report_model->get_formrow('form13','Verified');
		$data['d13'] = $this->report_model->get_formrow('form13','Denied');
		$data['p13'] = $this->report_model->get_formrow('form13','Pending');

		$data['v15'] = $this->report_model->get_formrow('form15','Verified');
		$data['d15'] = $this->report_model->get_formrow('form15','Denied');
		$data['p15'] = $this->report_model->get_formrow('form15','Pending');

		$data['v17'] = $this->report_model->get_formrow('form17','Verified');
		$data['d17'] = $this->report_model->get_formrow('form17','Denied');
		$data['p17'] = $this->report_model->get_formrow('form17','Pending');

		$data['v18'] = $this->report_model->get_formrow('form18','Verified');
		$data['d18'] = $this->report_model->get_formrow('form18','Denied');
		$data['p18'] = $this->report_model->get_formrow('form18','Pending');

		$data['v19'] = $this->report_model->get_formrow('form19','Verified');
		$data['d19'] = $this->report_model->get_formrow('form19','Denied');
		$data['p19'] = $this->report_model->get_formrow('form19','Pending');

		$data['v20'] = $this->report_model->get_formrow('form20','Verified');
		$data['d20'] = $this->report_model->get_formrow('form20','Denied');
		$data['p20'] = $this->report_model->get_formrow('form20','Pending');

		$data['v21'] = $this->report_model->get_formrow('form21','Verified');
		$data['d21'] = $this->report_model->get_formrow('form21','Denied');
		$data['p21'] = $this->report_model->get_formrow('form21','Pending');

		$data['vhybrid'] = $this->report_model->get_formrow('formhybrid','Verified');
		$data['dhybrid'] = $this->report_model->get_formrow('formhybrid','Denied');
		$data['phybrid'] = $this->report_model->get_formrow('formhybrid','Pending');

		$data['t14'] = $this->report_model->get_form14();
		$data['t16'] = $this->report_model->get_form16();

		$this->load->view('officers/report/form-report', $data);
	}

	public function report(){

		$this->load->view('officers/report/evident-report', $data);
	}
	

}