<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form16_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form16($data)
	{
		// print_r($data);
		$this->db->insert('form16', $data);
		return 'true';
	}


}