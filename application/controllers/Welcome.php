<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->model('NewactivityModel');
		$data['new_activity']=$this->NewactivityModel->get_new_activity();
		$data['new_activity_list']=$this->NewactivityModel->get_all_new_activity();
		
		$this->load->model('ArticleModel');
		$data['article_list']=$this->ArticleModel->get_all_article('article_view="allow"');

		$this->load->model('FactformModel');
		$data['fact_form']=$this->FactformModel->get_all_fact_form();
		
		$this->load->model('OurworksModel');
		$data['our_works_list']=$this->OurworksModel->get_all_our_works('display_status="on"');
		
		$this->load->model('MemberlistModel');
		$data['member_list']=$this->MemberlistModel->get_all_memberlist('home_member_card="on"');
		
		
		$this->load->view('Aastha',$data);
		
	}
	public function not_found()
	{
		$this->load->view('not_found');
	}
	public function contactus($pagename="", $test="")
	{
		echo "$pagename";
		$this->load->view('new1');
		echo "$test";
	}
	public function our_works()
	{
		$this->load->model('OurworksModel');
		$data['our_works_list']=$this->OurworksModel->get_all_our_works();
		$data['our_works']=$this->OurworksModel->get_our_works();
		
		
		$this->load->model('NewactivityModel');
		$data['new_activity_list']=$this->NewactivityModel->get_all_new_activity();
		$this->load->view('our_works',$data);
	}
	public function our_works_form()
	{
		$this->load->view('our_works_form');
	}
	public function save_our_works()
	{
		$img=$_FILES['our_works_img'];
		if(!empty($img['tmp_name']))
		{
			$img_path=FCPATH.'public/upload/our_works_img/';
			move_uploaded_file($img['tmp_name'],$img_path.$img['name']);
		}
		else
		{
			$img['name']='';
		}
		$this->load->model('OurworksModel');
		$input=$this->input->post();
		$input['our_works_img']=$img['name'];
		$this->OurworksModel->save_our_works($input);
		redirect('Welcome/our_works');
		exit;
	}
	
	public function save_our()
	{
		$timg=$_FILES['our_works_img'];
		if(!empty($timg['tmp_name']))
		{
			$timg_path=FCPATH.'public/upload/our_works_img/';
			move_uploaded_file($timg['tmp_name'],$timg_path.$timg['name']);
		}
		else
		{
			$timg['name']='';
		}
		
		// echo "<pre>";
		// print_r($_FILES);
		// exit();
		$a_img_name = array();
		foreach($_FILES['our_works_details_img']['tmp_name'] as $k => $v)
		{
			
			
			$img=$_FILES['our_works_details_img'];
			if(!empty($img['tmp_name'][$k]))
			{
				$img_path=FCPATH.'public/upload/our_works_img/';
				move_uploaded_file($img['tmp_name'][$k],$img_path.$img['name'][$k]);
				$a_img_name[$k] = $img['name'][$k];
			}
			else
			{
				$img['name'][$k]='';
			}
		}
		
		$a_blog_name = array();
		foreach($_FILES['our_works_details_exp']['tmp_name'] as $k => $v)
		{
			$blog=$_FILES['our_works_details_exp'];
			if(!empty($blog['tmp_name'][$k]))
			{
				$blog_path=FCPATH.'public/upload/our_works_details_pdf/';
				move_uploaded_file($blog['tmp_name'][$k],$blog_path.$blog['name'][$k]);
				$a_blog_name[$k] = $blog['name'][$k];
			}
			else
			{
				$blog['name'][$k]='';
			}
		}
		
		$this->load->model('OurworksModel');
		$input=$this->input->post();
		$input['our_works_img']=$timg['name'];
		$input['our_works_details_img']=implode(",",$a_img_name);
		$input['our_works_details_exp']=implode(",",$a_blog_name);
		$this->OurworksModel->save_our_works($input);
		redirect('Welcome/our_works');
		exit;
	}
	
	public function home_event()
	{
		$this->load->view('home_event');
	}
	public function home_display_event()
	{
		$this->load->model('OurworksModel');
		$data['our_works']=$this->OurworksModel->get_our_works();
		if(!empty($data['our_works'])){
		$this->load->view('index',$data);
		}
		else{
		$this->load->view('common_event');
		}
	}
	
	// public function memberlist()
	// {
	// 	$this->load->model('MemberlistModel');
	// 	$data['member_list_member']=$this->MemberlistModel->get_all_memberlist('member_position="Member" && member_request="approved" ');
	// 	$data['member_list_admin']=$this->MemberlistModel->get_all_memberlist('member_position="Admin" && member_request="approved" ');
	// 	$data['member_list_moderator']=$this->MemberlistModel->get_all_memberlist('member_position="Moderator" && member_request="approved" ');
	// 	$this->load->view('memberlist',$data);
	// }
	
	public function memberlist_form()
	{
		$this->load->view('memberlist_form');
	}
	public function save_memberlist()
	{
		// $img=$_FILES['member_img'];
		// if(!empty($img['tmp_name']))
		// {
		// 	$img_path=FCPATH.'public/upload/memberlist/';
		// 	move_uploaded_file($img['tmp_name'],$img_path.$img['name']);
		// }
		// else
		// {
		// 	$img['name']='';
		// }
		$this->load->library('session');
		$this->load->model('MemberlistModel');
		$input=$this->input->post();
		//$input['member_img']=$img['name'];
		$set=$this->MemberlistModel->save_memberlist($input);
		if($set == 1)
           {
               echo '<script>alert("You Have Successfully updated this Record!\n\nStay connect with us, We will contact you later.\nThank You");</script>';
               redirect('Welcome/memberlist_form', 'refresh');
           }
           else{
               $this->session->set_flashdata("message","Record Not Updated!");
               redirect('Welcome/memberlist_form', 'refresh');
           }
		
	}
	
	
	public function footer()
	{
		$this->load->view('footer.php');
	}
	public function admin_panel()
	{
		$this->load->view('admin_panel',$data);
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	public function new_activity()
	{
		$this->load->model('NewactivityModel');
		$data['new_activity_list']=$this->NewactivityModel->get_all_new_activity();
		$this->load->view('new_activity',$data);
	}
	public function new_activity_form()
	{
		$this->load->view('new_activity_form');
	}
	public function save_new_activity()
	{
		$img=$_FILES['new_activity_img'];
		if(!empty($img['tmp_name']))
		{
			$img_path=FCPATH.'public/upload/new_activity_img/';
			move_uploaded_file($img['tmp_name'],$img_path.$img['name']);
		}
		else
		{
			$img['name']='';
		}
		$this->load->model('NewactivityModel');
		$input=$this->input->post();
		$input['new_activity_img']=$img['name'];
		$this->NewactivityModel->save_new_activity($input);
		redirect('Welcome/new_activity');
		exit;
	}
	
	// public function common_event()
	// {
		// $this->load->model('OurworksModel');
		// $data['our_works']=$this->OurworksModel->get_our_works();
		// if(!empty($data['our_works'])){
		// $this->load->view('new_activity',$data);
		// }
		// else{
		// $this->load->view('common_event');
		// }
	// }
	
	public function gallery()
	{
		$this->load->model('OurworksModel');
		
		$data['our_works_list']=$this->OurworksModel->get_all_our_works();
		$this->load->view('gallery',$data);
	}
	public function donate_us()
	{
		$this->load->view('donate_us');
	}
	
	
	
	public function sign_up()
	{
		$this->load->view('sign_up');
	}
	public function save_sign_up()
	{
		
		$this->load->model('SignupModel');
		$input=$this->input->post();
		$this->SignupModel->save_sign_up($input);
		redirect('Welcome/Sign_up');
		exit;
	}
	
	
	public function login()  
    {  
        $this->load->view('login');  
    }  
    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='admin' && $pass=='123')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));

			$this->load->model('FactformModel');
			$data['fact_form']=$this->FactformModel->get_all_fact_form();

            $this->load->view('admin_panel',$data);  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }
	
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("welcome/index");  
    }  
	
	public function abc_view()  
    {  
        $this->load->view('abc_view');  
    }
	
	public function article()  
    {  
        $this->load->model('ArticleModel');
		$data['article_list']=$this->ArticleModel->get_all_article();
		$this->load->view('article',$data); 
    }
	
	public function article_form()  
    {  
        $this->load->view('article_form');  
    }
	
	public function save_article()
	{
		$img=$_FILES['article_img'];
		if(!empty($img['tmp_name']))
		{
			$img_path=FCPATH.'public/upload/article/article_img/';
			move_uploaded_file($img['tmp_name'],$img_path.$img['name']);
		}
		else
		{
			$img['name']='';
		}
		
		$pdf=$_FILES['article_pdf'];
		if(!empty($pdf['tmp_name']))
		{
			$pdf_path=FCPATH.'public/upload/article/article_pdf/';
			move_uploaded_file($pdf['tmp_name'],$pdf_path.$pdf['name']);
		}
		else
		{
			$pdf['name']='';
		}
		$this->load->model('ArticleModel');
		$input=$this->input->post();
		$input['article_img']=$img['name'];
		$input['article_pdf']=$pdf['name'];
		$this->ArticleModel->save_article($input);
		redirect('Welcome/article');
		exit;
	}
	
	public function our_works_details($id=0)
	{
		//echo $id;
		$this->load->model('OurworksModel');
		$data['details']=$this->OurworksModel->get_details($id);
		$this->load->view('our_works_details', $data);
		
	}

	public function save_message_box()  
    {
		// $pdf=$_FILES['message_box_file'];
		// if(!empty($file['tmp_name']))
		// {
		// 	$file_path=FCPATH.'public/upload/message_box/';
		// 	move_uploaded_file($file['tmp_name'],$file_path.$file['name']);
		// }
		// else
		// {
		// 	$file['name']='';
		// }

		$a_file_name = array();
		foreach($_FILES['message_file']['tmp_name'] as $k => $v)
		{
			
			
			$file=$_FILES['message_file'];
			if(!empty($file['tmp_name'][$k]))
			{
				$file_path=FCPATH.'public/upload/message_box/';
				move_uploaded_file($file['tmp_name'][$k],$file_path.$file['name'][$k]);
				$a_file_name[$k] = $file['name'][$k];
			}
			else
			{
				$file['name'][$k]='';
			}
		}

		$this->load->model('MessageboxModel');
		$input=$this->input->post();
		$input['message_file']=implode(",",$a_file_name);
		$this->MessageboxModel->save_message_box($input);
		redirect('Welcome/index');
		exit;
		
	}
	
	// public function fact_form_v()
	// {
	// 	$this->load->model('FactformModel');
	// 	$data['fact_form']=$this->FactformModel->get_fact_form();
	// 	$data['fact_form_list']=$this->OurworksModel->get_all_our_works();
	// 	$this->load->view('aastha',$data);
	
	// }

	public function fact_form()
	{
		$this->load->model('FactformModel');
		$data['fact_form']=$this->FactformModel->get_all_fact_form();
		$this->load->view('fact_form',$data);
	}

	public function save_fact_form()  
    {
		
		$this->load->model('FactformModel');
		$input=$this->input->post();
		$this->FactformModel->save_fact_form($input);
		redirect('Welcome/fact_form');
		exit;
	}
	
	
}  
?>  

