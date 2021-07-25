<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeeventModel extends CI_Model {

	public function get_our_works()
	{
		$sql="SELECT * FROM `our_works` where home_display_status='on'";
		$our_works=$this->db->query($sql)->row_array();
		return $our_works;
	}
	public function get_all_our_works()
	{
		$sql="SELECT * FROM `our_works` ORDER BY our_works_id desc ";
		$our_works=$this->db->query($sql)->result_array();
		return $our_works;
	}
}