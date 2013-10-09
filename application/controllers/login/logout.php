<?php
class Logout extends CI_Controller {

	public function index()
	{
		#echo 'this is login page';
		$this->load->view('login/loginview');
		
	}
	
	
	
	public function logout_user()
	{	$this->load->helper('url');
		$this->load->model('login/Logout_model');
		$this->Logout_model->logoutUser();
		redirect('login/login/','refresh');
	}
	
	
}
?>
