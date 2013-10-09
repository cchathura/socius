<?php
class Login extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
		$this->load->view('login/loginview');
		
	}
	public function register()
	{
		echo 'this is register page';
	}
	public function validateuser()
	{
		#echo 'this is validate';
		echo $_POST['username'];
		$this->load->model('login/Login_model');
		
		if ($this->Login_model->validateUser($_POST['username'], $_POST['password']))
			{
				
			#$this->load->view('login/loginview');
			$this->load->model('portal/Main_page_model');
			$this->Main_page_model->showMainPage();
			}
			else{
				$this->load->view('header/header');
				$this->load->view('login/registerview');
				$this->load->view('footer/footer');
			}
			

		
		}
		
	
	
	public function register_user()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('re-password', 'Re-password', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				#echo "register user contreoll";
				$this->load->model('login/Login_model');
				$this->Login_model->RegisterUser($_POST['username'], $_POST['password'],$_POST['re-password']);
				$this->load->view('login/loginsuccess');
				redirect('login/login/'.$question_id, 'refresh');
			}
			else
			{
				$this->load->view('header/header');
				$this->load->view('login/registerview');
				$this->load->view('footer/footer');
			}
	}
	
	public function showMainPage()
	{
		$this->load->model('portal/Main_page_model');
		$this->Main_page_model->showMainPage();
		
	}
	
	
}
?>
