<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Questionlib {
	
	 #public function __construct()
    #{
        #$question;
		#$user;
		#$date;
		#$id;
    #}
	    var $question;
		var $user;
		var $date;
		var $id;
		var $username;
		var $solved;
		var $title;
		var $offerAmount;
		
		
	public function setOfferAmount($amount)
	{
		$this->offerAmount=$amount;
	}
		
	public function getOfferAmount()
	{
		return $this->offerAmount;
	}
	
	public function setTitle($title)
	{
		$this->title=$title;
	}
		
	public function getTitle()
	{
		return $this->title;
	}

		
	public function setSolved($solve)
	{
		$this->solved=$solve;
	}
	
	public function getSolved()
	{
		return $this->solved;
	}
	
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
	
    public function setQuestion($question)
    {
		$this->question = $question;
    }
	public function getQuestion()
    {
		
		return $this->question;
    }
	public function setUser($user)
    {
		$this->user = $user;
    }
	public function getUser()
    {
		return $this->user;
    }
	public function setDate($date)
    {
		$this->date = $date;
    }
	public function getDate()
    {
		return $this->date;
    }
	public function setId($id)
    {
		$this->id = $id;
    }
	public function getId()
    {
		return $this->id;
    }
	
}
