<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function getAvaibleCredit($u_id)
	{	
		
		$this->load->database();
		$get_user_credit_query = $this->db->query("SELECT credit  FROM registered_users WHERE user_id =".$u_id);
		if ($get_user_credit_query->num_rows() > 0)
			{
				
				
				$row = $get_user_credit_query->row();
				return $row->credit;;
			} 
			else 
			{
				
				return 0;
			}


	}

	public function getuserName($u_id)
	{	
		
		$this->load->database();
		$get_user_name_query = $this->db->query("SELECT username  FROM registered_users WHERE user_id =".$u_id);
		if ($get_user_name_query->num_rows() > 0)
			{
				
				
				$row = $get_user_name_query->row();
				return $row->username;;
			} 
			else 
			{
				
				return "no-name";
			}


	}
	
	
	
	}
?>
