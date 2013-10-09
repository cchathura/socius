<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Userlib {
	
	 #public function __construct()
    #{
        #$question;
		#$user;
		#$date;
		#$id;
    #}
	    
		var $username;
		var $id;
	

    public function setUsername($username)
    {
		$this->username = $username;
    }
	public function getUsername()
    {
		
		return $this->username;
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
