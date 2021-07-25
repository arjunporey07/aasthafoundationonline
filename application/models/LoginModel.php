<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function get_login()
	{
		$sql="SELECT * FROM `sign_up`";
		$login=$this->db->query($sql)->row_array();
		return $login;
	}
	public function get_all_login()
	{
		$sql="SELECT * FROM `login`";
		$login=$this->db->query($sql)->result_array();
		return $login;
	}
	// public function save_memberlist($data=array())
	// {
		// $insert['member_name']=$data['member_name'];
		// $insert['member_designation']=$data['member_designation'];
		// $insert['member_position']=$data['member_position'];
		// $insert['member_quote']=$data['member_quote'];
		// $insert['member_join_dt']=$data['member_join_dt'];
		// $insert['member_status']=$data['member_status'];
		// $memberlist=$this->db->insert('memberlist',$data);
		// return $memberlist;
	// }
}
