<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class abcModel extends CI_Model {

	public function get_abc()
	{
		
		$sql="SELECT * FROM `abc`";
		$abc=$this->db->query($sql)->row_array();
		return $abc;
	}
	public function get_all_abc()
	{
		$sql="SELECT * FROM `abc`";
		$abc=$this->db->query($sql)->result_array();
		return $abc;
	}
	public function save_abc($data=array())
	{
		$insert['abc_img']=$data['abc_img'];
		$abc=$this->db->insert('abc',$insert);
		return $abc;
	}
}
