<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logo extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->user_model->checkLogin();
        $this->load->model('logo_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('logger_model');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {
        $limit = 7;
        $page = $this->uri->segment(4) > 1 ? $this->uri->segment(4) : 1;
        $config['base_url'] = base_url('admin/logo/page');
        $config['total_rows'] = $this->logo_model->countRows();
        $config['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);

        $result = $this->logo_model->getRows($limit, ($page - 1) * $limit);
        $data = array('logos' => $result);


        $this->load->view('backend/layout/header');
        $this->load->view('backend/logo/index', $data);
        $this->load->view('backend/layout/footer');
    }

    function add() {
        $this->form_validation->set_rules('weblink', 'Website', 'required');
        $this->form_validation->set_message('required', '%s không được để trống');

        $data = array('error' => '');
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/logo';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //Tạo Tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $post = array(
                            'orig_name' => $data['orig_name'],
                            'file_name' => $data['file_name'],
                            'file_size' => $data['file_size'],
                            'image_width' => $data['image_width'],
                            'image_height' => $data['image_height'],
                            'image_type' => $data['image_type'],
                            'weblink' => $this->input->post('weblink'),
                            'display' => $this->input->post('display')
                        );
                        $id_logo = $this->logo_model->addRow($post);
                        if ($id_logo) {
                            $this->logger_model->addRow('Đã thêm mới Logo : ' . $data['orig_name']);
                            redirect(base_url('admin/logo/show/' . $id_logo));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $data['error'] = "Vui lòng chọn hình!";
                }
            }
        }
        $data['logo'] = $this->logo_model->defaultRow();
        $this->load->view('backend/layout/header');
        $this->load->view('backend/logo/add', $data);
        $this->load->view('backend/layout/footer');
    }

    function show($id = NULL) {
        $result = $this->logo_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/logo'));
        }
        $data = array('logo' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/logo/show', $data);
        $this->load->view('backend/layout/footer');
    }

    function edit($id = NULL) {
        $this->form_validation->set_rules('weblink', 'Website', 'required');
        $this->form_validation->set_message('required', '%s không được để trống');
        $data = array('error' => '');
        $result = $this->logo_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/logo'));
        }
        $data['logo'] = $result;
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/logo';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //Tạo Tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $post = array(
                            'orig_name' => $data['orig_name'],
                            'file_name' => $data['file_name'],
                            'file_size' => $data['file_size'],
                            'image_width' => $data['image_width'],
                            'image_height' => $data['image_height'],
                            'image_type' => $data['image_type'],
                            'weblink' => $this->input->post('weblink'),
                            'display' => $this->input->post('display')
                        );
                        $query = $this->logo_model->editRow($id, $post);
                        if ($query) {
                            unlink(UPLOADPATH . '/logo/' . $result['file_name']);
                            $this->logger_model->addRow('Đã chỉnh sửa Logo : ' . $result['orig_name']);
                            redirect(base_url('admin/logo/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $post = array(
                        'weblink' => $this->input->post('weblink'),
                        'display' => $this->input->post('display')
                    );
                    $query = $this->logo_model->editRow($id, $post);
                    if ($query) {
                        $this->logger_model->addRow('Đã chỉnh sửa Logo : ' . $result['orig_name']);
                        redirect(base_url('admin/logo/show/' . $id));
                    }
                }
            }
        }

        $this->load->view('backend/layout/header');
        $this->load->view('backend/logo/edit', $data);
        $this->load->view('backend/layout/footer');
    }

    function delete($id = NULL) {
        $result = $this->logo_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/logo'));
        }
        $result_del = $this->logo_model->deleteRow($id);
        if ($result_del) {
            $this->logger_model->addRow('Đã xóa Logo : ' . $result['orig_name']);
            unlink(UPLOADPATH . '/logo/' . $result['file_name']);
        }
        redirect(base_url('admin/logo'));
    }

}

?>