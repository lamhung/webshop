<?php
	class Product_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function addRow($data = array())
		{
			$this->db->insert('product',$data);
			$product_id = $this->db->insert_id();
			
			$this->images_model->updateTable_id($product_id,'product');
			$this->product_image_model->updateProductId($product_id);
			return  $product_id;	
		}
		
		function getRow($id)
		{
			
			$this->db->where('id',$id);
			$query = $this->db->get('product');
			$result = $query->row_array();
			
			return $result;
		}
		
		function convert_product($data = array())
		{
			if(count($data)>0)
			{
			$data['image_'] ="<img src='".base_url('upload/product').'/'.$data['image']."' style='max-width:1000px'>";
			}
			return $data;
		}
		
		function countRows($keyword = NULL)
		{
			if($keyword != NULL)
			{
				
				$this->db->like('name', $keyword);
			}
			
			$this->db->from('product');
			return $this->db->count_all_results();
			
				//echo $this->db->last_query();
				
		}
		function getRows($limit, $offset, $keyword = NULL)
		{
			if($keyword != NULL)
			{
				$this->db->like('name', $keyword);
			}
			$this->db->limit($limit,$offset);
			$query = $this->db->get('product');
			$result = $query->result_array();
			return $result;
		}
		function editRow($id = NULL, $post)
		{
			$this->db->where('id', $id);
			return $this->db->update('product',$post);
			
			
		}
		function defaultRow()
		{
			return array(
				'id' => NULL,
				'name'=>'',
				'description' => '',
				'detail' => '',
				'price' => '',
				'image' => '',
				'product_category_id' => 0,
                                'highlight' => 0
			);
		}
		
		function deleteRow($id = NULL)
		{
			$this->db->where('id', $id);
			$result = $this->db->delete('product');
			return $result;
		}
	    function searchOrder($product_keyword = NULL)
	    {
		  $this->db->like('name',$product_keyword);
		  $this->db->limit(5,0);
		  $query  = $this->db->get('product');
		  $result = $query->result_array();
		  return $result;
	    }
		
		function getProductFromCategoryUrl($url = NULL)
		{
			$this->db->select('P.*, C.name ,C.id as category_id');
			$this->db->where('P.product_category_id = C.id');
			$this->db->where("C.url = '".$url."'");
			$query = $this->db->get('product AS P, product_category AS C');
			$result = $query->result_array();
			
			return $result;
		}
		function getProductNew($limit = NULL,$offset = NULL)
		{
			$this->db->order_by('id','desc');
			$this->db->limit($limit, $offset);
			$query = $this->db->get('product');
			$result = $query->result_array();
			return $result;
		}
		function getProductHighlight()
		{
			$this->db->order_by('id','RANDOM');
			$this->db->where('highlight','1'); 
			$this->db->limit(8,0);
			$query = $this->db->get('product');
			$result = $query->result_array();
			return $result;
		}
		function getRelatedProduct($id = NULL, $product_category_id = NULL)
		{
			$this->db->where('id != '.$id);
			$this->db->where('product_category_id',$product_category_id); 
			$this->db->limit(4,0);
			$query = $this->db->get('product');
			$result = $query->result_array();
			return $result;
		}
		
	}
?>