<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->user_model->checkLogin();
        $this->load->library('form_validation');
        $this->load->model('product_model');
        $this->load->model('order_model');
        $this->load->model('order_detail_model');
        $this->load->library('pagination');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/order/index');
        $this->load->view('backend/layout/footer');
    }

    function add() {
        $this->form_validation->set_rules('fullname', 'Họ Tên', 'required');
        $this->form_validation->set_rules('phone', 'Điện Thoại', 'required');

        $this->form_validation->set_rules('delivery_at', 'Ngày Giao Hàng', 'required');

        $this->form_validation->set_message('required', '%s không được để trống!');
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $create_at = time();
                $user_login = $this->session->userdata('user_login');

                $post = array(
                    'fullname' => $this->input->post('fullname'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'email' => $this->input->post('email'),
                    'note' => $this->input->post('note'),
                    'create_at' => $create_at,
                    'delivery_at' => $this->input->post('delivery_at'),
                    'status' => $this->input->post('status'),
                    'user_id' => $user_login['id_user']
                );
                $id_order = $this->order_model->addRow($post);

                if ($id_order) {
                    if ($session = $this->session->userdata('admin_order')) {
                        foreach ($session as $key => $value) {
                            $post_order_detail = array(
                                'order_id' => $id_order,
                                'product_id' => $key,
                                'soluong' => $value
                            );
                            $id_order_detail = $this->order_detail_model->addRowDetail($post_order_detail);
                        }
                    }
                    $this->session->unset_userdata('admin_order');
                    redirect(base_url('admin/order/show/' . $id_order));
                }
            }
        }
        $products = array();
        if ($session = $this->session->userdata('admin_order')) {

            foreach ($session as $key => $value) {
                $result = $this->product_model->getRow($key);
                $result['soluong'] = $value;
                $result['id'] = $key;
                array_push($products, $result); //push vao products
            }
        }

        $data = array(
            'products' => $products,
            'order' => $this->order_model->defaultRow()
        );
        $this->load->view('backend/layout/header');
        $this->load->view('backend/order/add', $data);
        $this->load->view('backend/layout/footer');
    }

    function show($id_order = NULL) {

        $result = $this->order_model->getRow($id_order);

        if (!$result) {
            redirect(base_url('admin/order'));
        }
        $result_order_detail = $this->order_detail_model->getRowsDetail($id_order);
        //print_r($result_order_detail);exit;
        $data = array(
            'order' => $result,
            'order_details' => $result_order_detail
        );
        $this->load->view('backend/layout/header');
        $this->load->view('backend/order/show', $data);
        $this->load->view('backend/layout/footer');
    }

    function edit($id = NULL) {
        $result = $this->order_model->getRow($id);

        if (!$result) {
            redirect(base_url('admin/order'));
        }
        $result_order_details = $this->order_detail_model->getRowOrderDetails($id);


        if (!$this->session->userdata('admin_order')) {
            $this->session->set_userdata('admin_order', $result_order_details);
        }

        $products = array();
        if ($session = $this->session->userdata('admin_order')) {
            //print_r($session);exit;
            foreach ($session as $key => $value) {
                $result_product = $this->product_model->getRow($value['id']);
                $result_product['quantity'] = $value['quantity'];
                $result_product['id'] = $key;
                array_push($products, $result_product); //push vao products
            }
        }


        $data = array(
            'products' => $products,
            'order' => $result
        );

        $this->load->view('backend/layout/header');
        $this->load->view('backend/order/edit', $data);
        $this->load->view('backend/layout/footer');
    }

}
