<?php
	class Logger_model extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
		function countRows()
		{
			$this->db->from('logger');
			return $this->db->count_all_results();
		}
		function getRows($limit,$offset)
		{
			$this->db->limit($limit,$offset);
			$query = $this->db->get('logger');
			$result = $query->result_array();
			return $result;
		}
		function addRow($content = '')
		{
			
			$user_login = $this->session->userdata('user_login');
			$data = array(
				'user_id' => $user_login['id_user'],
				'username' => $user_login['username'],
				'content' =>  $content,
				'ip' => $_SERVER['REMOTE_ADDR'],
				'user_agent' => $_SERVER['HTTP_USER_AGENT'],
				'created_at' => time()
				);
			return $this->db->insert('logger',$data);
		}
	}
?>