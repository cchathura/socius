<?php
class Search_question extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
#this->load->view('login/loginview');
		
	}
	
	
	
	public function searchQuestion($keyword)
	{
		$this->load->model('question/Search_model');
		$serch_result['questions'] = $this->Search_model->searchQuestion($keyword);
		$this->load->view('header/header');
		$this->load->view('question/display_search_result',$serch_result);
		$this->load->view('footer/footer');
		
	}
	
	
	
		
	}
?>
