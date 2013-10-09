<?php
class Credit_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function getAvaibleCredit($u_id)
	{	
		$this->load->database();
		$get_credit_query = $this->db->query("SELECT credit FROM registered_users WHERE user_id =".$u_id );
		if ($get_credit_query->num_rows() > 0)
			{
				$row = $get_credit_query->row_array();
				return $row['credit'];
			} 
			else 
			{
				#echo " user not registerd";
				return 0;
			}


	}
	
	public function reduceCredit($u_id,$amount)
	{
		$this->load->database();
		$this->db->select('credit');
		$this->db->where('user_id', $u_id); 
		$query = $this->db->get('registered_users');
		$row = $query->row_array();
		$current_credit = $row['credit'];
		$data = array(
               'credit' => $current_credit - $amount
                );

		$this->db->where('user_id', $u_id);
		$this->db->update('registered_users', $data); 
		
		

	}
	
	public function add_onfly_credit($u_id,$amount,$q_id)
	{
	$this->load->database();
	$data = array(
	   'user_id' => $u_id ,
	   'credit' => $amount,
	   'question_id' => $q_id
		);

	$this->db->insert('on_fly_credit', $data); 
	
	}
	
	public function delete_onfly_credit($u_id,$q_id)
	{
	$this->load->database();
	$this->db->where('user_id', $u_id);
	$this->db->where('question_id', $q_id);
	$this->db->delete('on_fly_credit');
	
	}
	
	public function transferCredit($u_id,$transfer_u_id,$q_id)
	{
		$this->load->database();
		$this->load->model('question/Question_model');
		$this->db->select('credit');
		$this->db->where('user_id', $u_id);
		$this->db->where('question_id', $q_id);
		$query = $this->db->get('on_fly_credit');
		$row = $query->row_array();
		$amount= $row['credit'];
		$this->updateCredit($transfer_u_id,$amount);
		$this->Question_model->question_set_solved($q_id,1);
		
		
	}
	
	public function updateCredit($u_id,$amount)
	{
		$this->load->database();
		$this->db->select('credit');
		$this->db->where('user_id', $u_id); 
		$query = $this->db->get('registered_users');
		$row = $query->row_array();
		$current_credit = $row['credit'];
		$data = array(
               'credit' => $current_credit + $amount
                );

		$this->db->where('user_id', $u_id);
		$this->db->update('registered_users', $data); 

	}

	public function getCreditForQuestion($q_id)
	{	
		$this->load->database();
		$get_credit_query = $this->db->query("SELECT offer_amount FROM question WHERE id =".$q_id );
		if ($get_credit_query->num_rows() > 0)
			{
				$row = $get_credit_query->row_array();
				return $row['offer_amount'];
			} 
			else 
			{
				#echo " user not registerd";
				return 0;
			}


	}
		
	}
?>
