<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MessageboxModel extends CI_Model {

	public function get_message_box()
	{
		$sql="SELECT * FROM `message_box`";
		$message_box=$this->db->query($sql)->row_array();
		return $message_box;
	}
	public function get_all_message_box()
	{
		$sql="SELECT * FROM `message_box`";
		$message_box=$this->db->query($sql)->result_array();
		return $message_box;
	}
	public function save_message_box($data=array())
	{
		$insert['email']=$data['email'];
        $insert['message']=$data['msg'];
        $insert['message_file']=$data['message_file'];
		$message_box=$this->db->insert('message_box',$insert);
		return $message_box;
	}
}
