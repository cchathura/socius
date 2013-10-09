<?php
class Profile_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	public function showProfilePage(){
		$this->load->library('session');
		$this->load->model('user/User_model');
		$this->load->model('question/Question_model');
		$ses_data = $this->session->all_userdata();
		$model_myprofile_data['myquestions']=$this->Question_model->getQuestionOfUser($ses_data['user_id']);
		$model_myprofile_data['avaible_credit_amount'] =$this->User_model->getAvaibleCredit($ses_data['user_id']);
		$model_myprofile_data['user_name'] =$this->User_model->getuserName($ses_data['user_id']);

		return $model_myprofile_data;
	}
	
	public function showProfilePageFromId($u_id){
		
		$this->load->model('user/User_model');
		$this->load->model('question/Question_model');
		
		$model_myprofile_data['myquestions']=$this->Question_model->getQuestionOfUser($u_id);
		
		$model_myprofile_data['user_name'] =$this->User_model->getuserName($u_id);
		$model_myprofile_data['user_id'] = $u_id;
		return $model_myprofile_data;
	}
	
	
	
	}
?>
