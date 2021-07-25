<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurworksdetailsModel extends CI_Model {

	public function get_our_works_details()
	{
		$sql="SELECT * FROM `our_works_details` where display_status='on'";
		$our_works_details=$this->db->query($sql)->row_array();
		return $our_works_details;
	}
	public function get_all_our_works_details()
	{
		$sql="SELECT * FROM `our_works_details`";
		$our_works_details=$this->db->query($sql)->result_array();
		return $our_works_details;
	}
	public function save_our_works_details($data=array())
	{
		$insert['our_works_details_title']=$data['our_works_details_title'];
		$insert['our_works_details_dt']=$data['our_works_details_dt'];
		$our_works_details=$this->db->insert('our_works_details',$data);
		return $our_works_details;
	}
}
