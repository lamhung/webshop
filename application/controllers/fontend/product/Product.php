<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	function index($category_url = NULL)
	{
		$category = $this->product_category_model->getRowByUrl($category_url);
		if(!$category)
		{
			redirect(base_url('home'));
		}
		$data = array();
		$data['title_page'] = $category['name'];
		$products = $this->product_model->getProductFromCategoryUrl($category_url);
		$data['products'] = $products;
		$this->load->view('fontend/layout/header',$data);
		$this->load->view('fontend/product/index',$data);
		$this->load->view('fontend/layout/footer');
	}
	function detail($url = NULL, $id = NULL)
	{
		$data = array();
		
		$result = $this->product_model->getRow($id);
		$product_relate = $this->product_model->getRelatedProduct($id, $result['product_category_id']);
		$data['title_page'] = $url;
		if(!$result)
		{
			redirect(base_url('home'));
		}
		$data['product'] = $result;
		$data['product_relates'] = $product_relate;
		$data['product_images'] = $this->product_image_model->getRows($id);
		$this->load->view('fontend/layout/header',$data);
		$this->load->view('fontend/single/index',$data);
		$this->load->view('fontend/layout/footer');
	}
}