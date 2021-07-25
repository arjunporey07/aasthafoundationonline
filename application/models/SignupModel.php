<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupModel extends CI_Model {

	// public function get_sign_up()
	// {
		// $sql="SELECT * FROM `sign_up`";
		// $sign_up=$this->db->query($sql)->row_array();
		// return $sign_up;
	// }
	// public function get_all_sign_up()
	// {
		// $sql="SELECT * FROM `sign_up`";
		// $sign_up=$this->db->query($sql)->result_array();
		// return $sign_up;
	// }
	public function save_sign_up($data=array())
	{
		$insert['email']=$data['email'];
		$insert['password']=$data['password'];
		$sign_up=$this->db->insert('sign_up',$insert);
		return $sign_up;
	}
}
