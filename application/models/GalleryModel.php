<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryModel extends CI_Model {

	public function get_gallery()
	{
		$sql="SELECT * FROM `gallery` where display_status='on'";
		$gallery=$this->db->query($sql)->row_array();
		return $gallery;
	}
	public function get_all_gallery()
	{
		$sql="SELECT * FROM `gallery` ORDER BY gallery_id desc ";
		$gallery=$this->db->query($sql)->result_array();
		return $gallery;
	}
	public function save_gallery($data=array())
	{
		$insert['gallery_title']=$data['gallery_title'];
		$insert['gallery_desc']=$data['gallery_desc'];
		$insert['gallery_dt']=$data['gallery_dt'];
		$insert['gallery_status']=$data['gallery_status'];
		$gallery=$this->db->insert('gallery',$data);
		return $gallery;
	}
}
