<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberlistModel extends CI_Model {

	public function get_memberlist()
	{
		$sql="SELECT * FROM `memberlist` where member_request='approved' ";
		$memberlist=$this->db->query($sql)->row_array();
		return $memberlist;
	}
	public function get_all_memberlist($cond="1")
	{
		$sql="SELECT * FROM `memberlist` where $cond ";
		$memberlist=$this->db->query($sql)->result_array();
		return $memberlist;
	}
	public function save_memberlist($data=array())
	{
		$insert['member_name']=$data['member_name'];
		// $insert['member_designation']=$data['member_designation'];
		// $insert['member_img']=$data['member_img'];
		$insert['member_email']=$data['member_email'];
		$insert['member_number']=$data['member_number'];
		// $insert['gender']=$data['gender'];
		// $insert['local_address']=$data['local_address'];
		// $insert['city']=$data['city'];
		// $insert['state']=$data['state'];
		// $insert['country']=$data['country'];
		// $insert['zip']=$data['zip'];
		// $insert['facebook_link']=$data['facebook_link'];
		// $insert['twitter_link']=$data['twitter_link'];
		// $insert['instagram_link']=$data['instagram_link'];
		// $insert['website_link']=$data['website_link'];
		// $insert['member_quote']=$data['member_quote'];
		// $insert['message']=$data['message'];
		$memberlist=$this->db->insert('memberlist',$insert);
		return $memberlist;
	}
}
