<?php
	class Order_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database(); 
		}
		function addRow($data = array())
		{
			$query = $this->db->insert('orders',$data);
			$result = $this->db->insert_id();
			
			return $result;
		}
		function getRow($id = NULL)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('orders');
			
			$result = $query->row_array();
			return $result;
		}
		function defaultRow()
		{
			return array(
				'fullname' => '',
				'phone' => '',
				'address' => '',
				'email' => '',
				'note' => '',
				'create_at' => '',
				'delivery_at' => '',
				'status' =>'',
				'user_id' => ''
			);
		}
		
		
	}
?>