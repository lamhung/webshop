<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
    function __construct() {
        parent :: __construct();
        $this->user_model->checkLogin();
        $this->load->library('form_validation');
        $this->lang->load('backend', $this->session->userdata('language'));
    }
    function index()
    {
        $title = array('title_page' => 'webshop.local');
        $this->load->view('fontend/layout/header',$title);
        $this->load->view('fontend/orders/index');
        $this->load->view('fontend/layout/footer');
    }
    function createOrders($id = NULL)
    {
        $session = array(
            'product_id' => $id,
            'quantity' => $this->input->post('quantity')
        );
        if (!$this->session->userdata('orders')) {
            $this->session->set_userdata('orders',$session);
        }
        print_r($this->session->userdata('orders'));
        
        
    }
}
