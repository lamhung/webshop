<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->user_model->checkLogin();
        $this->load->view('backend/layout/header');
        $this->load->view('backend/home/index');
        $this->load->view('backend/layout/footer');
        $this->lang->load('backend',$this->session->userdata('language'));
    }

    public function change_language() {
        if ($this->input->post('language')) {
            $this->session->set_userdata('language', $this->input->post('language'));
        }
       
    }
    public function select_all_language()
    {
        $this->lang->is_loaded();
        $lang = $this->lang->language;
        echo json_encode($lang);
    }

}
