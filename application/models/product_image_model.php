<?php
	class Product_image_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function addRow($data = array())
		{
			$query = $this->db->insert('product_image',$data);
			return $query;
		}
		function getRows($product_id = NULL)
		{
			$this->db->where('product_id',$product_id);
			$query = $this->db->get('product_image');
			$result = $query->result_array();
			return $result;
		}
		function updateProductId($product_id)
		{
			$this->db->where('product_id', 0);
			$this->db->update('product_image',array('product_id' => $product_id));
		}
		function getRow($id = NULL)
		{
			 $this->db->where('id', $id);
			 $query = $this->db->get('product_image');
			 return $query->row_array();
		}
		function deleteRow($id = NULL)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('product_image');
			return $query;
		}
	}
	