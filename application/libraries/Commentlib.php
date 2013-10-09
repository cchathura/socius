<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Commentlib {
	#$CI =& get_instance();
	#$CI->load->library('Userlib');
	 public function __construct()
    {
	
        #$question;
		#$user;
		#$date;
		#$id;
    }
	    var $comment;
		var $user_id;
		var $date;
		var $question_id;
		#$user =new Userlib;
		var $username;
		
	/*public function setUser($u_id)
    {	
		$CI->load->database();
		$this->user->setId($u_id);
		$get_username_query = $this->db->query("SELECT username FROM registered_users WHERE user_id ='".$u_id."'");
		#$question_d;
		
		if ($get_username_query->num_rows() > 0)
			{
				$row = $get_username_query->row_array();
				
				$this->user->setUsername($row['username']);
				#$question_d[0]=$question_object;
				
				
			}
		
    }
	
	public function getUser()
	{
		return $this->user;
	}

	*/
	public function setUsername($u_id)
	{
		$CI =& get_instance();
		$CI->load->database();

		#$this->load->database();
		#$this->user->setId($u_id);
		$get_username_query = $CI->db->query("SELECT username FROM registered_users WHERE user_id ='".$u_id."'");
		
		
		if ($get_username_query->num_rows() > 0)
			{
				$row = $get_username_query->row_array();
				
				$this->username=$row['username'];
				#$question_d[0]=$question_object;
				
				
			}
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
    public function setComment($comment)
    {
		$this->comment = $comment;
    }
	public function getComment()
    {
		
		return $this->comment;
    }
	public function setUser_id($user)
    {
		$this->user_id = $user;
    }
	public function getUser_id()
    {
		return $this->user_id;
    }
	public function setDate($date)
    {
		$this->date = $date;
    }
	public function getDate()
    {
		return $this->date;
    }
	public function set_q_Id($id)
    {
		$this->question_id = $id;
    }
	public function get_q_Id()
    {
		return $this->question_id;
    }
	
}
