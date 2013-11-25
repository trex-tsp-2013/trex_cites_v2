<?php

class Form16_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');
		$this->load->model('form16_model');
		$this->load->model('form21_model');
	}

	public function update_stat11(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form15_Id' => $this->input->post('form15_Id')); 
			$id = $ida['form15_Id'];
				//save username to be data
			$data['username'] = $user->username;
			$data['form15'] = $this->form15_model->get_listidform15('11', $id);
			$data['form15']['req_Id'] = $data['form15']['form15_Id'];
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
				redirect('officers/status/11');
			}else{
				show_404();
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function update_stat21(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form21_Id' => $this->input->post('form21_Id')); 
			
			if($this->input->post('stat') == "Denied"){
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form21_model->update_stat_form21($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/21');
			} else {
				
				$user = $this->ion_auth->user()->row();
				$ida = array( 'form21_Id' => $this->input->post('form21_Id')); 
				$id = $ida['form21_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form21'] = $this->form21_model->get_listidform21('21', $id);
				$data['form21']['req_Id'] = $data['form21']['form21_Id'];
				unset($data['form21']['form21_Id'],
					$data['form21']['status'],
					$data['form21']['comment'],
					$data['form21']['fregisNum'],
					$data['form21']['fname3'],
					$data['form21']['fimnum'],
					$data['form21']['fformdate'],
					$data['form21']['fformdateend']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form16_model->save_form16($data['form21']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form21_model->update_stat_form21($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/21');
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function view16($req_Id, $req){
		if(!$this->ion_auth->logged_in()){
			redirect('auth', 'refresh');
		}

		$data['form16'] = $this->form16_model->get_form16($req_Id, $req);
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$this->load->view('pages/previews/preview16', $data);

	}



}