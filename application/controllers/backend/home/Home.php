<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->user_model->checkLogin();
		$this->load->view('backend/layout/header');
		$this->load->view('backend/home/index');
		$this->load->view('backend/layout/footer');
	}
}