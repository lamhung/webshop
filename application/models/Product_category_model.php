<?php
	class Product_category_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function addRow($data = array())
		{
			$query = $this->db->insert('product_category', $data);
			return $this->db->insert_id();
			
		}
		function editRow($id = NULL, $data = array())
		{
			$this->db->where('id', $id);
			$query = $this->db->update('product_category',$data);
			
			return $query;
		}
		
		function deteteRow($id = NULL)
		{
			$this->db->where('id', $id);
			return $this->db->delete('product_category');
		}
		
		function countRows()
		{
			$this->db->from('product_category');
			return $this->db->count_all_results();
		}
		
		function getRows($limit , $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('product_category');
			return $query->result_array();
		}
		
		function getRowsCategory()
		{
			$query = $this->db->get('product_category');
			return $query->result_array();
		}
		function getRow($id = NULL)
		{
			$this->db->where('id' , $id);
			$query = $this->db->get('product_category');
			$result = $query->row_array();
			return $result;
		}
		function getRowByUrl($url = NULL)
		{
			$this->db->where('url' , $url);
			$query = $this->db->get('product_category');
			$result = $query->row_array();
			return $result;
		}
		
		
		function defaultRow()
		{
			return array(
				'id' => NULL,
				'name'=>'',
				'url' => '',
				'ordinal' => '',
				'image' => ''
				
			);	
		}
		
	}