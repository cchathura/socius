<?php
class Logout_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function logoutUser()
	{

		
		$this->load->library('session');
		$this->session->sess_destroy();
	}
	
     }
?>
