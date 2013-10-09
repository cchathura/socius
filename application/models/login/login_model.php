<?php
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function validateUser($username, $password)
	{

		$this->load->database();
		$this->load->library('session');

		$query = $this->db->query("SELECT username,user_id FROM registered_users WHERE username = '".$username."' AND password = '".$password."'");

		if ($query->num_rows() > 0)
			{
				#echo " user registered";
				$row = $query->row_array();
				$uid = $row['user_id'];
				
				$session_data = array(
                   			'username'  => $username,
                   			'user_id'     => $uid,
                   			'logged_in' => TRUE
              				 );

				$this->session->set_userdata($session_data);
			return true;
			} 
			else 
			{
				#echo " user not registerd";
				return false;
			}


	}
	public function RegisterUser($username, $password, $re_password)
	{
		$this->load->database();
		$this->load->helper('date');
		$now = time();
		$data = array(
			array(
			'username' => $username ,
			'password' => $password,
			'credit' => 100,
			'last_update_date' => unix_to_human($now, TRUE, 'us')
			)
			);

		$this->db->insert_batch('registered_users', $data); 

		
	}
	
	
	
	}
?>
