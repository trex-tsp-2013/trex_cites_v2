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

	public function get_form16($req_Id, $req)
	{
		$query = $this->db->get_where('form16', array('request' => $req, 'req_Id' => $req_Id ));
		return $query->row_array();
	}

}