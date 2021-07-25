<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articleModel extends CI_Model {

	public function get_article()
	{
		
		$sql="SELECT * FROM `article`";
		$article=$this->db->query($sql)->row_array();
		return $article;
	}
	public function get_all_article($cond="1")
	{
		$sql="SELECT * FROM `article` where $cond ";
		$article=$this->db->query($sql)->result_array();
		return $article;
	}
	public function save_article($data=array())
	{
		$insert['article_title']=$data['article_title'];
		$insert['article_img']=$data['article_img'];
		$insert['article_desc']=$data['article_desc'];
		$insert['article_dt']=$data['article_dt'];
		$insert['article_pdf']=$data['article_pdf'];
		$insert['article_status']=$data['article_status'];
		$article=$this->db->insert('article',$insert);
		return $article;
	}
}
