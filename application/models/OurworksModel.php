<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurworksModel extends CI_Model {

	public function get_our_works()
	{
		
		$sql="SELECT * FROM `our_works`";
		$our_works=$this->db->query($sql)->row_array();
		return $our_works;
	}
	public function get_all_our_works($cond="1")
	{
		$sql="SELECT * FROM `our_works` where $cond ORDER BY our_works_id desc ";
		$our_works=$this->db->query($sql)->result_array();
		return $our_works;
	}
	public function get_details($id=0)
	{
		
		$sql="SELECT * FROM `our_works` where our_works_id=$id";
		$our_works=$this->db->query($sql)->row_array();
		return $our_works;
	}
	public function save_our_works($data=array())
	{
		$insert['our_works_title']=$data['our_works_title'];
		$insert['our_works_img']=$data['our_works_img'];
		$insert['our_works_desc']=$data['our_works_desc'];
		$insert['our_works_dt']=$data['our_works_dt'];
		$insert['our_works_details_img']=$data['our_works_details_img'];
		$insert['our_works_details_video']=$data['our_works_details_video'];
		$insert['our_works_details_exp']=$data['our_works_details_exp'];
		$insert['our_works_status']=$data['our_works_status'];
		$our_works=$this->db->insert('our_works',$insert);
		return $our_works;
	}
}
