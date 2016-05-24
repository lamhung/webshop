<?php
	class Order_detail_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database(); 
		}
		function addRowDetail($data = array())
		{
			$query = $this->db->insert('order_details',$data);
			$result = $this->db->insert_id();
			return $result;
		}
		function getRowsDetail($order_id = NULL)
		{
			$this->db->select('name,price,quantity,image,order_id');
			$this->db->where('order_details.product_id = product.id');
			$this->db->where('order_details.order_id ='.$order_id);
			$query = $this->db->get('product,order_details');
			//echo $this->db->last_query();
			return $query ->result_array();
		}
		function getRowOrderDetails($order_id = NULL)
		{
			$this->db->where('order_id',$order_id);
			$query = $this->db->get('order_details');
			return $query->result_array();
		}
		
	}
?>