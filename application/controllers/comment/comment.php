<?php
class Comment extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
#this->load->view('login/loginview');
		
	}
	
	
	
	public function addComment($question_id)
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('comment/Comment_model');
		$ses_data = $this->session->all_userdata();
		$question_id=$_POST['question_id'];
		$this->Comment_model->insertComment($_POST['comment_text'],$ses_data['user_id'],$_POST['question_id']);
		#$this->load->view('question/view_question/displayquestion/'.$question_id);
		redirect('question/view_question/displayQuestion/'.$question_id, 'refresh');
		
	}
		
	}
?>
