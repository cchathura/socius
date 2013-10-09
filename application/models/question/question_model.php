<?php
class Question_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function getLatestQuestion()
	{	
		$this->load->library('questionlib');
		$this->load->database();
		//question,u_id, create_date,id
		$query = $this->db->query("SELECT *  FROM question WHERE solved = 0 order by create_date DESC  LIMIT 10 ");
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
			else 
			{
				#echo " user not registerd";
				return false;
			}


	}
	
	public function insertQuestion($question,$u_id, $tags,$offer,$title)
	{
	$last_index =0;
	$this->load->database();
	$query = $this->db->query("SELECT last_id  FROM q_index");
		if ($query->num_rows() > 0)
		{
		$row = $query->row_array();
		$last_index = $row['last_id'];

		$data = array(
               		'last_id' => $last_index + 1
               	 	);

		$this->db->update('q_index', $data); 

		}else{
			$last_index = 100;

		$data = array(
               		'last_id' => $last_index + 1
               	 	);

		$this->db->insert('q_index', $data); 
		}
		$this->load->helper('date');
		$now = time();

	$query_question_insert = $this->db->query("INSERT INTO `hackthon`.`question`(`id`,`question`,`u_id`,`create_date`,`offer_amount`,`solved`,`title`) VALUES(".$last_index.",'".$question."',".$u_id. ", '".unix_to_human($now, TRUE, 'us')."' ,".$offer.", 0,'".$title."')");

	#splite tags
	$parts = explode(' ', $tags);

	#print_r($parts);
	$tag_query_values="";
	$next_index = $last_index +1;
	$isfirst=TRUE;
	foreach ($parts as $tag){
	if ($isfirst){
		
		$isfirst = FALSE;
	}else{
		$tag_query_values=$tag_query_values.",";
	}
	
	 $tag_query_values= $tag_query_values."(".$next_index.", '".$tag."')";
		}
	
	$query_tag_insert = $this->db->query("INSERT INTO `hackthon`.`q_tag`(`q_id`,`tag`) VALUES".$tag_query_values);
	return $last_index;
	}
	
	
	public function get_question($question_id)
	{
		$this->load->database();
		$this->load->library('questionlib');
		
		$get_question_content_query = $this->db->query("SELECT * FROM question WHERE id ='".$question_id."'");
		#$question_d;
		
		if ($get_question_content_query->num_rows() > 0)
			{
				$row = $get_question_content_query->row_array();
				
				$question_object = new Questionlib;
				$question_object->setQuestion($row['question']);
				$question_object->setTitle($row['title']);
				$question_object->setUser($row['u_id']);
				$question_object->setUsername($row['u_id']);
				$question_object->setDate($row['create_date']);
				$question_object->setId($row['id']);
				//$question_object->setOfferAmount($row['offer_amount']);
				#$question_d[0]=$question_object;
				
				return $question_object;
			}
			else
			{
				return NULL;
			}
				
	}
	
	public function get_comments($question_id)
	{
		$this->load->library('commentlib');
		$get_comment_query = $this->db->query("SELECT * FROM q_comment WHERE q_id =".$question_id." order by comment_date");
		$comments_d;
		if ($get_comment_query->num_rows() > 0)
			{	
				
				$index=0;
				foreach ($get_comment_query->result() as $row)
				{
					$comment_object = new Commentlib;
					$comment_object->setComment($row->comment);
					$comment_object->setUser_id($row->user_id);
					#$comment_object->setUser($row->user_id);
					$comment_object->setUsername($row->user_id);
					$comment_object->setDate($row->comment_date);
					$comment_object->set_q_Id($row->q_id);
					$comments_d[$index]=$comment_object;
					$index++;
				}
				
				return $comments_d;
		
			}
			else{
				return NULL;
			}
	}
	
	public function getQuestionOfUser($u_id){
	
		$this->load->database();
		$this->load->library('questionlib');
		
		$get_user_questions_query = $this->db->query("SELECT * FROM question WHERE u_id ='".$u_id."'");
		$questions;
		if ($get_user_questions_query->num_rows() > 0)
			{
				$index=0;
				foreach ($get_user_questions_query->result() as $row)
				{
					$question_object = new Questionlib;
					$question_object->setQuestion($row->question);
					$question_object->setUser($row->u_id);
					#$question_object->setUsername($row->u_id);
					$question_object->setSolved($row->solved);
					$question_object->setDate($row->create_date);
					$question_object->setId($row->id);
					$question_object->setOfferAmount($row->offer_amount);
					$questions[$index] = $question_object;
					$index++;
				}
				
				return $questions;
			}
			else
			{
				return NULL;
			}
	
	}
	
	public function delete_question($q_id)
	{
		$this->load->database();
		$this->db->where('id', $q_id);
		$this->db->delete('question');
	}
	
	public function question_set_solved($q_id,$state)
	{
		$this->load->database();
		
		$data = array(
               'solved' => $state
                );
		$this->db->where('id', $q_id);
		$this->db->update('question', $data);
	}
	
	}
?>
