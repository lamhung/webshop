<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Logger extends CI_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->user_model->checkLogin();
			$this->load->model('logger_model');
			$this->load->model('user_model');
			$this->load->library('pagination');
		}
		function index()
		{
			$limit = 50;
			$page = $this->uri->segment(4)>1?$this->uri->segment(4):1;
			$config['base_url'] = site_url().'/admin/logger/page/';
			$config['total_rows'] = $this->logger_model->countRows();
			$config['uri_segment']  = 4;
			$config['per_page'] = $limit;
			$config['use_page_numbers'] = TRUE;
			$config['full_tag_open'] = '<div class="pagenav">';
			$config['full_tag_close'] = '</div>';
			
			$this->pagination->initialize($config);
			$result = $this->logger_model->getRows($limit,($page-1)*$limit);
			
			$data = array(
				'loggers' => $result,
			);
			$this->load->view('backend/layout/header');
			$this->load->view('backend/logger/index',$data);
			$this->load->view('backend/layout/footer');
			
		}
	}
?>