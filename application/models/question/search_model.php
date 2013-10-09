<?php
class Search_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
		
		public function searchQuestion($keyword)
		{
			
			$this->load->library('questionlib');
			$this->load->database();
			//question,u_id, create_date,id
			$query = $this->db->query("SELECT *  FROM question WHERE  title like '%".$keyword."%'");
			if ($query->num_rows() > 0)
			{
				$questions;
				$index=0;
			
			
				foreach ($query->result() as $row)
				{
					$question_object = new Questionlib;
					$question_object->setQuestion($row->question);
					$question_object->setUser($row->u_id);
					$question_object->setUsername($row->u_id);
					$question_object->setDate($row->create_date);
					$question_object->setId($row->id);
					$question_object->setTitle($row->title);
					$question_object->setOfferAmount($row->offer_amount);
			
					$questions[$index]=$question_object;
			
					$index++;
				}
				#$question_object=$questions[0];
				#echo $questions[0]->getQuestion();
				return $questions;
		
		}
		
		
		
	
}
}
?>
