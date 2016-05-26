<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->user_model->checkLogin();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('product_category_model');
        $this->load->model('logger_model');
        $this->load->library('text_lib');
        $this->load->library('upload');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {
        $limit = 10;
        $page = $this->uri->segment(4) > 1 ? $this->uri->segment(4) : 1;
        $config['base_url'] = base_url('admin/product_category/page');
        $config['total_rows'] = $this->product_category_model->countRows();
        $config['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $result = $this->product_category_model->getRows($limit, ($page - 1) * $limit);
        $data = array('product_categories' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product_category/index', $data);
        $this->load->view('backend/layout/footer');
    }

    function add() {
        $this->form_validation->set_rules('name', 'Họ Tên', 'required');
        $this->form_validation->set_rules('ordinal', 'Thứ Tự', 'required');
        $data['product_category'] = $this->product_category_model->defaultRow();
        $this->form_validation->set_message('required', '%s không được để trống');
        $data = array('error' => '');

        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/product/product_category';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //mã hóa tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $post = array(
                            'name' => $this->input->post('name'),
                            'url' => $this->text_lib->clean_url($this->input->post('name')),
                            'ordinal' => $this->input->post('ordinal'),
                            'image' => $data['file_name']
                        );
                        $id = $this->product_category_model->addRow($post);
                        if ($id) {
                            $this->logger_model->addRow('Đã thêm mới danh mục sản phẩm : ' . $this->input->post('name'));

                            redirect(base_url('admin/product_category/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $post = array(
                        'name' => $this->input->post('name'),
                        'url' => $this->text_lib->clean_url($this->input->post('name')),
                        'ordinal' => $this->input->post('ordinal')
                    );
                    $id = $this->product_category_model->addRow($post);
                    if ($id) {
                        $this->logger_model->addRow('Đã thêm mới danh mục sản phẩm : ' . $this->input->post('name'));

                        redirect(base_url('admin/product_category/show/' . $id));
                    }
                }
            }
        }
        $data['product_category'] = $this->product_category_model->defaultRow();
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product_category/add', $data);
        $this->load->view('backend/layout/footer');
    }

    function show($id = NULL) {
        $result = $this->product_category_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/product_category'));
        }
        $data = array('product_category' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product_category/show', $data);
        $this->load->view('backend/layout/footer');
    }

    function edit($id = NULL) {
        $this->form_validation->set_rules('name', 'Họ Tên', 'required');
        $this->form_validation->set_rules('ordinal', 'Thứ Tự', 'required');

        $this->form_validation->set_message('required', '%s không được để trống');
        $data = array('error' => '');

        $result = $this->product_category_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/product_category'));
        }

        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/product/product_category';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //mã hóa tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $post = array(
                            'name' => $this->input->post('name'),
                            'url' => $this->text_lib->clean_url($this->input->post('name')),
                            'ordinal' => $this->input->post('ordinal'),
                            'image' => $data['file_name']
                        );
                        $result_category = $this->product_category_model->editRow($id, $post);

                        if ($result_category) {
                            unlink(UPLOADPATH . '/product/product_category/' . $result['image']);

                            $this->logger_model->addRow('Đã chỉnh sửa danh mục sản phẩm : ' . $this->input->post('name'));

                            redirect(base_url('admin/product_category/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $post = array(
                        'name' => $this->input->post('name'),
                        'url' => $this->text_lib->clean_url($this->input->post('name')),
                        'ordinal' => $this->input->post('ordinal')
                    );
                    $result_category = $this->product_category_model->editRow($id, $post);
                    if ($result_category) {
                        $this->logger_model->addRow('Đã chỉnh sửa danh mục sản phẩm : ' . $this->input->post('name'));

                        redirect(base_url('admin/product_category/show/' . $id));
                    }
                }
            }
        }

        $data['product_category'] = $result;
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product_category/edit', $data);
        $this->load->view('backend/layout/footer');
    }

    function delete($id = NULL) {
        $result = $this->product_category_model->getRow($id);

        if (!$result) {
            redirect(base_url('admin/product_category'));
        }
        $query_del = $this->product_category_model->deteteRow($id);
        if ($query_del) {
            unlink(UPLOADPATH . '/product/product_category/' . $result['image']);
            $this->logger_model->addRow('Đã xóa danh mục sản phẩm : ' . $result['name']);
        }
        redirect(base_url('admin/product_category'));
    }

}
