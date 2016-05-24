<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data = array();
		$result = $this->product_model->getProductNew(8,0);
		$result_highlight = $this->product_model->getProductHighlight();
		$data['products'] = $result;
		$data['products_highlight'] = $result_highlight;
		$this->load->view('fontend/layout/header');
		$this->load->view('fontend/home/index',$data);
		$this->load->view('fontend/layout/footer');
	}
}