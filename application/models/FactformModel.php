<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactformModel extends CI_Model {

	public function get_fact_form()
	{
		$sql="SELECT * FROM `fact_form`";
		$fact_form=$this->db->query($sql)->row_array();
		return $fact_form;
	}
	public function get_all_fact_form()
	{
		$sql="SELECT * FROM `fact_form`";
		$fact_form=$this->db->query($sql)->result_array();
		return $fact_form;
	}
	public function save_fact_form($data=array())
	{
		$insert['active_member']=$data['active_member'];
        $insert['work_done']=$data['work_done'];
        $insert['person']=$data['person'];
		$fact_form=$this->db->update('fact_form',$insert);
		return $fact_form;
	}
}
