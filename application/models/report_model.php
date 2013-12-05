
<?php 

class Report_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_showform($form,$slug){
		$query = $this->db->get_where($form, array('status' => $slug));
		return $query->row_array();
	}

	public function get_formrow($form,$slug){
		$query = $this->db->get_where($form, array('status' => $slug));
		return $query->num_rows();
	}

	public function get_form16(){
		$query = $this->db->get_where('form16');
		return $query->num_rows();
	}

	public function get_form14(){
		$query = $this->db->get_where('form14');
		return $query->num_rows();
	}

}