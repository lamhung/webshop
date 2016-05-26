<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->user_model->checkLogin();
        $this->load->model('banner_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('logger_model');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {
        $limit = 7;
        $page = $this->uri->segment(4) > 1 ? $this->uri->segment(4) : 1;
        $config['base_url'] = base_url('admin/banner/page');
        $config['total_rows'] = $this->banner_model->countRows();
        $config['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);

        $result = $this->banner_model->getRows($limit, ($page - 1) * $limit);
        $data = array('banners' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/banner/index', $data);
        $this->load->view('backend/layout/footer');
    }

    function add() {
        $this->form_validation->set_rules('weblink', 'Website', 'required');
        $this->form_validation->set_rules('company', 'Công Ty', 'required');
        $this->form_validation->set_rules('posted_date', 'Ngày Đăng', 'required');
        $this->form_validation->set_rules('expiration_date', 'Ngày Hết Hạn', 'required');
        $this->form_validation->set_message('required', '%s không được để trống!');
        $data = array('error' => '');
        $data['banner'] = $this->banner_model->defaultRow();
        $data['positions'] = $this->position_model->getRows();
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/banner';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //Tạo Tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {

                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $posted_date = $this->input->post('posted_date');
                        $expiration_date = $this->input->post('expiration_date');
                        $post = array(
                            'orig_name' => $data['orig_name'],
                            'file_name' => $data['file_name'],
                            'file_size' => $data['file_size'],
                            'image_width' => $data['image_width'],
                            'image_height' => $data['image_height'],
                            'image_type' => $data['image_type'],
                            'weblink' => $this->input->post('weblink'),
                            'company' => $this->input->post('company'),
                            'posted_date' => strtotime($posted_date),
                            'expiration_date' => strtotime($expiration_date),
                            'position_place' => $this->input->post('position')
                        );
                        $id = $this->banner_model->addRow($post);
                        if ($id) {
                            $this->logger_model->addRow('Đã thêm mới Banner : ' . $data['orig_name']);
                            redirect(base_url('admin/banner/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $data['error'] = 'Vui lòng chọn hình';
                }
            }
        }
        $this->load->view('backend/layout/header');
        $this->load->view('backend/banner/add', $data);
        $this->load->view('backend/layout/footer');
    }

    function show($id = NULL) {
        $result = $this->banner_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/banner'));
        }

        $data = array(
            'banner' => $this->banner_model->convertRow($result),
            'position' => $this->position_model->getRow($result['position_place'])   
         );
        
        $this->load->view('backend/layout/header');
        $this->load->view('backend/banner/show', $data);
        $this->load->view('backend/layout/footer');
    }

    function edit($id = NULL) {
        $this->form_validation->set_rules('weblink', 'Website', 'required');
        $this->form_validation->set_rules('company', 'Công Ty', 'required');
        $this->form_validation->set_rules('posted_date', 'Ngày Đăng', 'required');
        $this->form_validation->set_rules('expiration_date', 'Ngày Hết Hạn', 'required');
        $this->form_validation->set_message('required', '%s không được để trống!');
        $data = array('error' => '');
        $data['positions'] = $this->position_model->getRows();
        $result = $this->banner_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/banner'));
        }
        $data['banner'] = $result;

        $user_login = $this->session->userdata('user_login');
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/banner';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //Tạo Tên
                $this->upload->initialize($config);
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $posted_date = $this->input->post('posted_date');
                        $expiration_date = $this->input->post('expiration_date');
                        $post = array(
                            'orig_name' => $data['orig_name'],
                            'file_name' => $data['file_name'],
                            'file_size' => $data['file_size'],
                            'image_width' => $data['image_width'],
                            'image_height' => $data['image_height'],
                            'image_type' => $data['image_type'],
                            'weblink' => $this->input->post('weblink'),
                            'company' => $this->input->post('company'),
                            'posted_date' => strtotime($posted_date),
                            'expiration_date' => strtotime($expiration_date),
                        );
                        $result_banner = $this->banner_model->editRow($id, $post);
                        if ($result_banner) {
                            unlink(UPLOADPATH . '/banner/' . $result['file_name']);

                            $this->logger_model->addRow('Đã chỉnh sửa Banner : ' . $result['orig_name']);
                            redirect(base_url('admin/banner/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $posted_date = $this->input->post('posted_date');
                    $expiration_date = $this->input->post('expiration_date');
                    $post = array(
                        'weblink' => $this->input->post('weblink'),
                        'company' => $this->input->post('company'),
                        'posted_date' => strtotime($posted_date),
                        'expiration_date' => strtotime($expiration_date),
                    );
                    $result_banner = $this->banner_model->editRow($id, $post);
                    if ($result_banner) {

                        $this->logger_model->addRow('Đã chỉnh sửa Banner : ' . $result['orig_name']);
                        redirect(base_url('admin/banner/show/' . $id));
                    }
                }
            }
        }
        $this->load->view('backend/layout/header');
        $this->load->view('backend/banner/edit', $data);
        $this->load->view('backend/layout/footer');
    }

    function delete($id) {
        $result = $this->banner_model->getRow($id);
        if (!$result) {

            redirect(base_url('admin/banner'));
        }
        $query = $this->banner_model->deleteRow($id);
        if ($query) {
            unlink(UPLOADPATH . '/banner/' . $result['file_name']);
            $this->logger_model->addRow('Đã xóa Banner : ' . $result['orig_name']);
            echo "<script>alert('Xóa Thành Công!')</script>";
        }
        redirect(base_url('admin/banner'));
    }

    function search() {

        if ($this->input->post('keyword')) {
            $this->session->set_userdata('keyword_banner', $this->input->post('keyword'));
        }

        $limit = 7;
        $page = $this->uri->segment(5) > 1 ? $this->uri->segment(5) : 1;
        $config['base_url'] = base_url('admin/banner/search/page');
        ;
        $config['total_rows'] = $this->banner_model->countRows($this->session->userdata('keyword_banner'));
        $config['uri_segment'] = 5;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $result = $this->banner_model->getRows($limit, ($page - 1) * $limit, $this->session->userdata('keyword_banner'));
        $data = array('banners' => $result);

        $this->load->view('backend/layout/header');
        $this->load->view('backend/banner/index', $data);
        $this->load->view('backend/layout/footer');
    }

}

?>