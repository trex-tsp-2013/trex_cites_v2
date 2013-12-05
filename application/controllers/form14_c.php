<?php

class Form14_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form13_model');
		$this->load->model('form14_model');
		$this->load->model('formhybrid_model');
	}


	public function update_stat3($req){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form13_Id' => $this->input->post('form13_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form13_model->update_stat_form13($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/'.$req);
			} else 
				{

				$id = $ida['form13_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form13'] = $this->form13_model->get_listidform13($req, $id);
				$data['form13']['req_Id'] = $data['form13']['form13_Id'];
				unset($data['form13']['form13_Id'],
					$data['form13']['status'],
					$data['form13']['comment'],
					$data['form13']['fplace'],
					$data['form13']['fdate'],
					$data['form13']['fbd'],
					$data['form13']['fnation'],
					$data['form13']['fother'],
					$data['form13']['fname3'],
					$data['form13']['fnurse'],
					$data['form13']['fnurseno'],
					$data['form13']['ftrans'],
					$data['form13']['fvalue'],
					$data['form13']['fentry'],
					$data['form13']['fdel'],
					$data['form13']['form16_Id']);
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form14_model->save_form14($data['form13']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form13_model->update_stat_form13($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/'.$req);
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function update_stat61(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'formhybrid_Id' => $this->input->post('formhybrid_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->formhybrid_model->update_stat_formhybrid($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/61');
			} else 
				{

				$id = $ida['formhybrid_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['formhybrid'] = $this->formhybrid_model->get_listidformhybrid(61, $id);
				$data['formhybrid']['req_Id'] = $data['formhybrid']['formhybrid_Id'];
				unset($data['formhybrid']['formhybrid_Id'],
					$data['formhybrid']['status'],
					$data['formhybrid']['comment'],
					$data['formhybrid']['fbd'],
					$data['formhybrid']['fnation'],
					$data['formhybrid']['fstreet'],
					$data['formhybrid']['fprovince'],
					$data['formhybrid']['fzipcode'],
					$data['formhybrid']['ftel'],
					$data['formhybrid']['fphone'],
					$data['formhybrid']['ffax'],

					$data['formhybrid']['fstreet2'],
					$data['formhybrid']['fprovince2'],
					$data['formhybrid']['fzipcode2'],
					$data['formhybrid']['ftel2'],
					$data['formhybrid']['fphone2'],
					$data['formhybrid']['ffax2'],

					
					$data['formhybrid']['fname3'],
					$data['formhybrid']['faddress3'],
					$data['formhybrid']['fstreet3'],
					$data['formhybrid']['fprovince3'],
					$data['formhybrid']['fzipcode3'],
					$data['formhybrid']['ftel3'],
					$data['formhybrid']['fphone3'],
					$data['formhybrid']['ffax3'],

					$data['formhybrid']['fmark'],
					$data['formhybrid']['value'],
					$data['formhybrid']['transportby'],
					$data['formhybrid']['exportto'],
					$data['formhybrid']['estarrivedate']
					
					);
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form14_model->save_form14($data['formhybrid']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->formhybrid_model->update_stat_formhybrid($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/61');
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}



	public function view14($req_Id, $req){
		if(!$this->ion_auth->logged_in()){
			redirect('auth', 'refresh');
		}

		$data['form14'] = $this->form14_model->get_form14($req_Id, $req);
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$this->load->view('pages/previews/preview14', $data);

	}



}