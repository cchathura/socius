<?php
class Offer_credit extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
		
		$this->load->view('login/loginview');
		
	}
	
	public function viewOfferCredit()
	{
	/*$this->load->library('session');
	#$this->load->model('user/Credit_model');
	$this->load->model('question/Question_model');
	$ses_data = $this->session->all_userdata();
	$view_myprofile_data['myquestions']=$this->Question_model->getQuestionOfUser($ses_data['user_id']);*/
	
	$this->load->library('session');
	$ses_data = $this->session->all_userdata();
	$this->load->model('credit/Credit_model');
	$this->load->model('question/Question_model');
	$view_credit_offer_data['user_id'] = $ses_data['user_id'];
	$view_credit_offer_data['question_id'] = $_POST['question_id'];
	#$view_myprofile_data=$this->Profile_model->showProfilePage();
	
	$question_data=$this->Question_model->get_question($_POST['question_id']);
	$view_credit_offer_data['question_data']=$question_data;
	
	$comments_data=$this->Question_model->get_comments($_POST['question_id']);
	$view_credit_offer_data['comments_data']=$comments_data;
	
	$this->load->view('header/header');
	$this->load->view('question/credit_offer_question',$view_credit_offer_data);	

		
	}
	
	public function transferCredit()
	{
		$this->load->model('credit/Credit_model');
		$this->load->model('profile/Profile_model');
		$this->Credit_model->transferCredit($_POST['u_id'],$_POST['transfer_u_id'],$_POST['ques_id']);
		$this->Credit_model->delete_onfly_credit($_POST['u_id'],$_POST['ques_id']);
		$view_myprofile_data=$this->Profile_model->showProfilePage();
		$this->load->view('profile/myprofile_page',$view_myprofile_data);
	}
	
	
		
	}
?>
