<?php
class Profile extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
		
		$this->load->view('login/loginview');
		
	}
	
	public function viewMyProfile()
	{
	/*$this->load->library('session');
	#$this->load->model('user/Credit_model');
	$this->load->model('question/Question_model');
	$ses_data = $this->session->all_userdata();
	$view_myprofile_data['myquestions']=$this->Question_model->getQuestionOfUser($ses_data['user_id']);*/
	$this->load->model('profile/Profile_model');
	
	$view_myprofile_data=$this->Profile_model->showProfilePage();
	$this->load->view('header/header',$view_myprofile_data);
	$this->load->view('profile/myprofile_page',$view_myprofile_data);	

		
	}
	
	public function viewUserProfileFromId($u_id)
	{
		/*$this->load->library('session');
		 #$this->load->model('user/Credit_model');
		$this->load->model('question/Question_model');
		$ses_data = $this->session->all_userdata();
		$view_myprofile_data['myquestions']=$this->Question_model->getQuestionOfUser($ses_data['user_id']);*/
		$this->load->model('profile/Profile_model');
	
		$view_myprofile_data=$this->Profile_model->showProfilePageFromId($u_id);
		$this->load->view('header/header',$view_myprofile_data);
		$this->load->view('profile/user_profile_page',$view_myprofile_data);
	
	
	}
		
	}
?>
