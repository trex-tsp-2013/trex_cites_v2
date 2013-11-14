<?php

class Report_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');

	}
	public function home()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report_home',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}
	
	public function report1()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report1',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report2()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report2',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report3()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report3',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report4()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report4',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report5()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report5',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report6()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/report/report6',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}
}