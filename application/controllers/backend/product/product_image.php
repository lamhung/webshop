<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_image extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->user_model->checkLogin();
		$this->load->library('form_validation');
		$this->load->model('product_image_model');
		$this->load->library('upload');
	}
	
	function index()
	{
		//print_r($_FILES['product_image']);exit;
		if($this->input->post('image_form_submit') ==1)
		{
			$config = array();
			$config['upload_path'] = UPLOADPATH.'/product/slider';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = '5120';
			$config['encrypt_name'] = true;
			$data = array();
			$files = $_FILES;
			$user_login = $this->session->userdata('user_login'); 
			if($_FILES)
			{
			foreach($_FILES['product_image']['name'] as $key =>$value)
			{
				$_FILES['product_image']['name'] = $files['product_image']['name'][$key];
				$_FILES['product_image']['type'] = $files['product_image']['type'][$key];
				$_FILES['product_image']['tmp_name'] = $files['product_image']['tmp_name'][$key];
				$_FILES['product_image']['error'] = $files['product_image']['error'][$key];
				$_FILES['product_image']['size'] = $files['product_image']['size'][$key];
				$this->upload->initialize($config);
					
				if($this->upload->do_upload('product_image'))
				{
					$data = $this->upload->data();
						
					$post = array(
						'orig_name' => $data['orig_name'],
						'file_name' => $data['file_name'],
						'file_size' => $data['file_size'],
						'image_width' => $data['image_width'],
						'image_height' => $data['image_height'],
						'image_type' => $data['image_type'],
						'raw_name' => $data['raw_name'],
						'file_ext' => $data['file_ext'],
						'user_id' => $user_login['id_user'],
						'product_id' => $this->input->post('product_id')
					);
					$this->product_image_model->addRow($post);
					$config_thumb = array();
					$config_thumb['image_library'] = 'gd2';
					$config_thumb['source_image'] = UPLOADPATH.'/product/slider/'.$data['file_name'];
					$config_thumb['create_thumb'] = TRUE;
					$config_thumb['maintain_ratio'] = TRUE;
					$config_thumb['width']   = 220;
					$config_thumb['height']   = 180;
					$this->load->library('image_lib', $config_thumb); 
					$this->image_lib->resize();
				}
			}
			}
			
		}
		$result = $this->product_image_model->getRows($this->input->post('product_id'));
		$getimage = array(
			'product_images' => $result
		);
		
		$this->load->view('backend/product/product_image',$getimage);
	}
	
	function product_image_remove()
	{
		
		$html = '';
		if($this->input->post('id'))
		{
			$result = $this->product_image_model->getRow($this->input->post('id'));
			
			$query_del = $this->product_image_model->deleteRow($this->input->post('id'));
			if($query_del)
			{
				unlink(UPLOADPATH.'/product/slider/'.$result['file_name']);
				//unlink(UPLOADPATH.'/product/slider/'.$result['raw_name'].'_thumb'.$result['file_ext']);
			}
			
			$product_images = $this->product_image_model->getRows($result['product_id']);
			foreach($product_images as $product_image)
			{
				$html.="<div id='list_images'>".
						"<div class='wrapper_image'>".
						"<div class='img'><img src='".base_url('upload/product/slider/'.$product_image['file_name'])."'></div>".
						"<div class='ac_img'><span class='button'>[<a href='javascript:product_image_remove(".$product_image['id'].")'>Xóa</a>]</span> </div>".
						"</div>".
						"</div>";
				
			}
			
		}
		echo json_encode(array('success'=> true, 'data'=> $html));

		
	}
}
?>