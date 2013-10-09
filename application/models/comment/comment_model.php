<?php
class Comment_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	
	public function insertComment($comment,$u_id,$q_id)
	{
	
	$this->load->database();
	$this->load->helper('date');
	$now = time();
	$data = array(
   'q_id' => $q_id ,
   'comment' => $comment,
   'user_id' => $u_id,
   'comment_date' => unix_to_human($now, TRUE, 'us')
		);

	$this->db->insert('q_comment', $data); 


	

	
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
				$question_object->setUser($row['u_id']);
				$question_object->setDate($row['create_date']);
				$question_object->setId($row['id']);
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
	}
?>
