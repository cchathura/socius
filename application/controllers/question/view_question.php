<?php
class View_question extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
#this->load->view('login/loginview');
		
	}
	
	
	
	public function displayQuestion($question_id)
	{
	$this->load->library('session');
	$this->load->model('question/Question_model');
	$this->load->model('credit/Credit_model');	
	$this->load->model('question/Like_question_model');

	$ses_data = $this->session->all_userdata();
	$question_data=$this->Question_model->get_question($question_id);
	$display_question_data['question_data']=$question_data;
	
	$comments_data=$this->Question_model->get_comments($question_id);
	$display_question_data['comments_data']=$comments_data;
	
	$question_credit=$this->Credit_model->getCreditForQuestion($question_id);
	$display_question_data['credit_amount_data']=$comments_data;
	
	$display_question_data['like_count']= $this->Like_question_model->getLikeCount($question_id);
	$display_question_data['islike']= $this->Like_question_model->isLiked($ses_data['user_id'],$question_id);
	//$display_question_data['question_title']= $this->Like_question_model->isLiked($ses_data['user_id'],$question_id);
	$this->load->view('header/header');
	$this->load->view('question/display_question',$display_question_data);
	$this->load->view('footer/footer');
		
	}
		
	}
?>
