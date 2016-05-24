<?php
	class News_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
		function addRow($data = array())
		{
			$query = $this->db->insert('news',$data);
			$result  = $this->db->insert_id();
			
			$this->images_model->updateTable_id($result,'news');
			return $result;
		}
		
		function editRow($id = NULL,$post)
		{
			$this->db->where('id',$id);
			$result = $this->db->update('news',$post);
			return $result;
		}
		
		function deleteRow($id = NULL)
		{
			$this->db->where('id',$id);
			$result = $this->db->delete('news');
			return $result;
		}
		
		function getRow($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('news');
			$result = $query->row_array();
			return $result;
		}
		
		function convert($data = array())
		{
			if(count($data)>0)
			{
			$data['image_'] ="<img src='".base_url('upload/news').'/'.$data['image']."'>";
			}
			return $data;
		}
		function countRows($keyword = NULL)
		{
			if($keyword != NULL)
			{
				$this->db->like('title',$keyword);
			}
			$this->db->from('news');
			return $this->db->count_all_results();
		}
		 function getRows($limit,$offset,$keyword = NULL)
		 {
			 if($keyword != NULL)
			 {
				$this->db->like('title',$keyword);
			 }
			 $this->db->limit($limit,$offset);
			 $query = $this->db->get('news');
			 $result = $query-> result_array();
			 return $result;
		 }
		 function defaultRow()
		 {
			return array(
				'id' => NULL,
				'title'=>'',
				'description' => '',
				'detail' => '',
				'user_id' => '',
				'image' => ''
				
			);
		 }
	}
?>