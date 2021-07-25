<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewactivityModel extends CI_Model {

	public function get_new_activity()
	{
		$sql="SELECT * FROM `new_activity` ";
		$new_activity=$this->db->query($sql)->row_array();
		return $new_activity;
	}
	public function get_all_new_activity()
	{
		$sql="SELECT * FROM `new_activity` where new_event_status='active' ";
		$new_activity=$this->db->query($sql)->result_array();
		return $new_activity;
	}
	public function save_new_activity($data=array())
	{
		$insert['new_event_title']=$data['new_activity_title'];
		$insert['new_event_img']=$data['new_activity_img'];
		$insert['new_event_details']=$data['new_activity_details'];
		$insert['new_event_location']=$data['new_activity_location'];
		$insert['new_event_route']=$data['new_activity_route'];
		$insert['new_event_dt']=$data['new_activity_dt'];
		$new_activity=$this->db->insert('new_activity',$insert);
		return $new_activity;
	}
}
