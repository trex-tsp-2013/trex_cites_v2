<?php

class Form15_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');

	}

	public function form15($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			$data['request'] = $request; 
			//open form15
			$this->load->view('pages/forms/form15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview15()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form15
			$this->load->view('pages/previews/preview15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	public function status(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form15_model->get_stat15($id['id']);
			
		$this->load->view('pages/status',$data);
	}


	public function save15()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data15 = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('fname'),
				'fbd' => $this->input->post('fbd'),
				'fnation' => $this->input->post('fnation'),
				'fpassport' => $this->input->post('fpassport'),
				'fissue' => $this->input->post('fissue'),
				'faddress' => $this->input->post('faddress'),
				'fstreet' => $this->input->post('fstreet'),
				'fprovince' => $this->input->post('fprovince'),
				'fzipcode'=> $this->input->post('fzipcode'),
				'ftel' => $this->input->post('ftel'),
				'ffax' => $this->input->post('ffax'),
				'fmail' => $this->input->post('fmail'),

				'fname2' => $this->input->post('fname2'),
				'fowner' => $this->input->post('fowner'),
				'faddress2' => $this->input->post('faddress2'),
				'fstreet2' => $this->input->post('fstreet2'),
				'fprovince2' => $this->input->post('fprovince2'),
				'fzipcode2' => $this->input->post('fzipcode2'),
				'ftel2' => $this->input->post('ftel2'),
				'fphone2' => $this->input->post('ffax2'),
				'ffax2' => $this->input->post('ffax2'),

				'flocation' => $this->input->post('flocation'),
				'faddress3' => $this->input->post('faddress3'),
				'fstreet3' => $this->input->post('fstreet3'),
				'fzipcode3' => $this->input->post('fzipcode3'),
				'ftel3' => $this->input->post('ftel3'),
				'fphone3' => $this->input->post('fphone3'),
				'ffax3' => $this->input->post('ffax3'),

				'plantname' => $this->input->post('plantname'),
				'sname' => $this->input->post('sname'),
				'numberbreed' => $this->input->post('numberbreed'),
				'numbercom' => $this->input->post('numbercom'),
				'source' => $this->input->post('source'),
				'ab' => $this->input->post('ab'),
				'request' => 11,
				);

				if($this->form15_model->save_form15($data15))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview form15
			// $this->load->view('pages/previews/preview15');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	public function list15($request)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			$data['request'] = $request;
			//load db table form15
			$data['form15'] = $this->form15_model->get_listform15($request);
			//open quqery form15
			$this->load->view('officers/form15/list15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}
	public function show15($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form15'] = $this->form15_model->get_showform15($formId);
			if (empty($data['form15'])){
				show_404();
			}
			$this->load->view('officers/form15/show15', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	public function update_stat15(){

		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
			$id =array('form15_Id' => $this->input->post('form15_Id'));
			$this->form15_model->update_stat_form15($id,$array);
			
			$user = $this->ion_auth->user()->row();

				//save username to be data
			$data['username'] = $user->username;
			$data['form15'] = $this->form15_model->get_listform15('11');

			//open quqery form15
			$this->load->view('officers/form15/list15',$data);
		}
		else{
			redirect('auth', 'refresh');
		}

	}

}