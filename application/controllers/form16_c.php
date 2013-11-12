<?php

class Form16_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');
		$this->load->model('form16_model');
	}

	public function update_stat11(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			if($this->input->post('stat') == "Denied"){
				redirect('form15/list15/11');
			}
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form15_Id' => $this->input->post('form15_Id')); 
			$id = $ida['form15_Id'];
				//save username to be data
			$data['username'] = $user->username;
			$data['form15'] = $this->form15_model->get_listidform15('11', $id);

			unset($data['form15']['form15_Id'],
				$data['form15']['status'],
				$data['form15']['comment']);
			
			// open quqery form15
			// $this->load->view('officers/form15/list15',$data);
			if($this->form16_model->save_form16($data['form15']))
			{

				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form15_model->update_stat_form15($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('form15/list15/11');
			}else{
				show_404();
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}




}