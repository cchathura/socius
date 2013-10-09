<?php
class Question extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
		
		$this->load->view('login/loginview');
		
	}
	
	public function askQuestion()
	{
	$this->load->library('session');
	$this->load->model('credit/Credit_model');
	$ses_data = $this->session->all_userdata();
	#$avaible_credit = $this->Question_model->getAvaibleCredit($ses_data['user_id']);
	$ask_question_data['avaible_credit'] = $this->Credit_model->getAvaibleCredit($ses_data['user_id']);
	$this->load->view('header/header');
	$this->load->view('question/ask_question_page',$ask_question_data);	
	$this->load->view('footer/footer');

		
	}
	
	public function addQuestion()
	{
	$this->load->library('session');
	$this->load->model('question/Question_model');
	
	$ses_data = $this->session->all_userdata();
	$offer_amount = $_POST['offer_amount'];
	$qus_id = $this->Question_model->insertQuestion($_POST['question_text'],$ses_data['user_id'],$_POST['qustion_tag'],$offer_amount,$_POST['question_title']);
	$this->load->model('portal/Main_page_model');
	$this->load->model('credit/Credit_model');
	$this->Credit_model->reduceCredit($ses_data['user_id'],$offer_amount);
	$this->Credit_model->add_onfly_credit($ses_data['user_id'],$offer_amount,$qus_id);
	$this->Main_page_model->showMainPage();
		
	}
		
	public function deleteQuestion()
	{
		$this->load->library('session');
		$this->load->model('question/Question_model');
		$this->load->model('profile/Profile_model');
		$ses_data = $this->session->all_userdata();
		#$avaible_credit = $this->Question_model->getAvaibleCredit($ses_data['user_id']);
		$this->Question_model->delete_question($_POST['question_id']);
		#$ask_question_data['avaible_credit'] = $this->Credit_model->getAvaibleCredit($ses_data['user_id']);
		$view_myprofile_data=$this->Profile_model->showProfilePage();
		$this->load->view('header/header');
		$this->load->view('profile/myprofile_page',$view_myprofile_data);		
	}
	}
?>
