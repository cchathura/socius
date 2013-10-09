<?php
class Like_question_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function likeQuestion($u_id, $q_id)
	{	
		$this->load->database();
		$data = array(
				'u_id' => $u_id,
				'q_id' => $q_id
		);
		
		$this->db->insert('q_to_like', $data);
		
	}
		
	public function unLikeQuestion($u_id, $q_id)
		{
			$this->load->database();
			$this->db->where('u_id', $u_id);
			$this->db->where('q_id', $q_id);
			$this->db->delete('q_to_like'); 
		
		}
		
		
		public function getLikeCount( $q_id)
		{
			$this->load->database();
			//echo "SELECT COUNT(*) as like_count FROM q_to_like WHERE u_id=".$u_id." AND q_id=".$q_id;
			$query_get_like_count = $this->db->query("SELECT COUNT(*) as like_count FROM q_to_like WHERE q_id=".$q_id);
			
			$row = $query_get_like_count->row();
			//echo $row->like_count;
			return $row->like_count;
			
		
		}
		
		public function isLiked($u_id, $q_id)
		{
			$this->load->database();
			//echo "SELECT COUNT(*) as like_count FROM q_to_like WHERE u_id=".$u_id." AND q_id=".$q_id;
			$query_get_like_count = $this->db->query("SELECT COUNT(*) as like_count FROM q_to_like WHERE u_id=".$u_id." AND q_id=".$q_id);
				
			$row = $query_get_like_count->row();
			//echo $row->like_count;
			//return $row->like_count;
			
			if ( $row->like_count > 0)
			{
				return TRUE;
			}else{
				
				return FALSE;
			}
				
		
		}
	
}
?>