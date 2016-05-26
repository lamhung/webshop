<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->user_model->checkLogin();
        $this->lang->load('backend', $this->session->userdata('language'));
    }
    public function index() {
        $this->user_model->checkLogin();
        $this->load->view('backend/layout/header');
        $this->load->view('backend/home/index');
        $this->load->view('backend/layout/footer');
    }

    public function change_language() {
        if ($this->input->post('language')) {
            $this->session->set_userdata('language', $this->input->post('language'));
        }
    }
    public function select_all_language()
    {
        $lang = $this->lang->language;
        echo json_encode($lang);
    }
    
}
