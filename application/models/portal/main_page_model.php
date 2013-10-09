<?php
class Main_page_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function getLatestQuestion()
	{	
		$this->load->library('question');
		$this->load->database();
		$query = $this->db->query("SELECT question,u_id, create_date,id  FROM question order by create_date DESC  LIMIT 10 ");
		if ($query->num_rows() > 0)
			{
				$questions;
				$index=0;
				
				
				foreach ($query->result() as $row)
				{
				  $question_object = new Question;
				  $question_object->setQuestion($row->question);
				  $question_object->setUser($row->u_id);
				  $question_object->setUsername($row->u_id);
				  $question_object->setDate($row->create_date);
				  $question_object->setId($row->id);
				  $questions[$index]=$question_object;
			     
				  $index++;
				}
				#$question_object=$questions[0];
				#echo $questions[0]->getQuestion();
				return $questions;
			} 
			else 
			{
				#echo " user not registerd";
				return false;
			}


	}
	
	public function showMainPage(){
		$this->load->library('session');
			
			$this->load->model('question/Question_model');
			$questions = $this->Question_model->getLatestQuestion();
			$data['qustion_list']=$questions;
			$user_session_data = $this->session->all_userdata();
			$data['user_data']= $user_session_data;
			$this->load->view('header/header');
			$this->load->view('portal/portal_main_page',$data);
			$this->load->view('footer/footer');
	}
	
	
	
	}
?>