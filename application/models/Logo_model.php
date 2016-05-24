<?php
	class Logo_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function addRow($data = array())
		{
			$this->db->insert('logo',$data);
			return $this->db->insert_id();
		}
		function editRow($id = NULL, $data = array())
		{
			$this->db->where('id',$id);
			return $this->db->update('logo', $data);
		}
		 
		function deleteRow($id = NULL)
		{
			$this->db->where('id',$id);
			return $this->db->delete('logo');
		}
		 
		function getRow($id = NULL)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('logo');
			return $query->row_array();
		}
		function countRows()
		{
			$this->db->from('logo');
			return $this->db->count_all_results();
		}
		function getRows($limit, $offset)
		{
			$this->db->limit($limit,$offset);
			$query = $this->db->get('logo');
			return $query->result_array();
		}
		
		function defaultRow()
		{
			return array(
				'orig_name' => '',
				'file_name' =>'',
				'file_size' => '',
				'image_width' => '',
				'image_height' => '',
				'image_type' => '',
				'weblink' => '',
				'display' => ''
			);
		}
	}
		