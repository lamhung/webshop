<?php
	class Authenticate extends CI_Controller
	{
		function __construct() {
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('user_model');
			$this->load->library('session');
			$this->load->model('logger_model');
		}
		
		function login()
		{
			if($this->session->userdata('user_login'))
			{
				redirect(base_url('admin'));
			}
			
			$this->form_validation->set_rules('username','Tên Đăng Nhập','required');
			$this->form_validation->set_rules('password','Mật Khẩu','required');
			$this->form_validation->set_message('required', '%s không được để trống');
			$error = '';
			
			if($this->input->post('submit'))
			{				
				if($this->form_validation->run())
				{
					
					$error = $this->user_model->login($this->input->post('username'),$this->input->post('password'));
				}
			}
				
			$data = array('error' => $error);
			$this->load->view('backend/layout/login',$data);
		}
		function logout()
		{
			if($this->session->userdata('user_login'))
			{
				$this->user_model->logout();
			}
			
		}
	}
?>