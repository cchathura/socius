<?php
class Like_question extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
#this->load->view('login/loginview');
		
	}
	
	
	
	public function likeQuestion($q_id)
	{
	$this->load->helper('url');
	$this->load->model('question/Like_question_model');
	$this->load->library('session');
	$ses_data = $this->session->all_userdata();
	
	
	$this->Like_question_model->likeQuestion($ses_data['user_id'],$q_id);
	
	
	
	redirect('question/view_question/displayQuestion/'.$q_id, 'refresh');
		
	}
	
	
	public function unLikeQuestion($q_id,$u_id)
	{	
		$this->load->helper('url');
		$this->load->model('question/Like_question_model');
	
	
	
		$question_data=$this->Like_question_model->unLikeQuestion($q_id,$u_id);
	
	
	
		redirect('question/view_question/displayQuestion/'.$question_id, 'refresh');
	
	}
		
	}
?>
