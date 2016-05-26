<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->user_model->checkLogin();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('user_model');
        $this->load->model('logger_model');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {

        $limit = 2;
        $page = $this->uri->segment(4) > 1 ? $this->uri->segment(4) : 1;
        $config['base_url'] = base_url('admin/user/page/');
        $config['total_rows'] = $this->user_model->countRows();
        $config['uri_segment'] = 4;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $result = $this->user_model->getRows($limit, ($page - 1) * $limit);
        $data = array('users' => $result);

        $this->load->view('backend/layout/header');
        $this->load->view('backend/user/index', $data);
        $this->load->view('backend/layout/footer');
    }

    function add() {
        $this->form_validation->set_rules('fullname', 'Tên Hiển Thị', 'required');
        $this->form_validation->set_rules('username', 'Tên Đăng Nhập', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Mật Khẩu', 'required|trim|min_length[6]|max_length[20]|matches[repassword]|md5');
        $this->form_validation->set_rules('repassword', 'Nhập Lại Mật Khẩu', 'required|trim');
        $this->form_validation->set_rules('gender', 'Giới Tính', 'required');
        $this->form_validation->set_rules('phone', 'Điện Thoại', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]|valid_email');
        $this->form_validation->set_rules('birthday', 'Ngày Sinh', 'required');

        $this->form_validation->set_message('required', '%s không được để trống');
        $this->form_validation->set_message('is_unique', '%s đã tồn tại');
        $this->form_validation->set_message('min_length', '%s phải lớn hơn 6 kí tự');
        $this->form_validation->set_message('max_length', '%s phải nhỏ hơn 20 ki tự');
        $this->form_validation->set_message('matches', 'Mật Khẩu nhập lại không đúng');
        $this->form_validation->set_message('valid_email', '%s không đúng định dạng');
        $user_login = $this->session->userdata('user_login');
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $post = array(
                    'fullname' => $this->input->post('fullname'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'gender' => $this->input->post('gender'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'birthday' => $this->input->post('birthday'),
                );
                $id = $this->user_model->addRow($post);
                if ($id) {

                    $this->logger_model->addRow('Đã thêm mới User : ' . $this->input->post('username'));
                    redirect(base_url('admin/user/show/' . $id));
                }
            }
        }
        $data = array(
            'user' => $this->user_model->defaultRow()
        );
        $this->load->view('backend/layout/header');
        $this->load->view('backend/user/add', $data);
        $this->load->view('backend/layout/footer');
    }

    function show($id = NULL) {
        $result = $this->user_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/user'));
        }
        $data = array('user' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/user/show', $data);
        $this->load->view('backend/layout/footer');
    }

    function edit($id = NULL) {
        $result = $this->user_model->getRow($id);
        $data = array('user' => $result);
        $user_login = $this->session->userdata('user_login');
        if ($this->input->post('username') == $data['user']['username']) {
            $checkUser = 'required';
        } else {
            $checkUser = 'required|is_unique[user.username]';
        }
        $this->form_validation->set_rules('fullname', 'Tên Hiển Thị', 'required');
        $this->form_validation->set_rules('username', 'Tên Đăng Nhập', $checkUser);

        $this->form_validation->set_rules('password', 'Mật Khẩu', 'min_length[6]|max_length[20]|matches[repassword]|md5');
        $this->form_validation->set_rules('repassword', 'Nhập Lại Mật Khẩu', 'trim');
        $this->form_validation->set_rules('gender', 'Giới Tính', 'required');
        $this->form_validation->set_rules('phone', 'Điện Thoại', 'required');
        if ($this->input->post('email') == $data['user']['email']) {
            $checkMail = 'required|valid_email';
        } else {
            $checkMail = 'required|valid_email|is_unique[user.email]';
        }
        $this->form_validation->set_rules('email', 'Email', $checkMail);
        $this->form_validation->set_rules('birthday', 'Ngày Sinh', 'required');

        $this->form_validation->set_message('required', '%s không được để trống');
        $this->form_validation->set_message('is_unique', '%s đã tồn tại');
        $this->form_validation->set_message('min_length', '%s phải lớn hơn 6 kí tự');
        $this->form_validation->set_message('max_length', '%s phải nhỏ hơn 20 ki tự');
        $this->form_validation->set_message('matches', 'Mật Khẩu nhập lại không đúng');
        $this->form_validation->set_message('valid_email', '%s không đúng định dạng');


        if (!$result) {
            redirect(base_url('admin/user'));
        }
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                if ($this->input->post('password') == '') {
                    $password = $data['user']['password'];
                } else {
                    $password = $this->input->post('password');
                }
                $post = array(
                    'fullname' => $this->input->post('fullname'),
                    'username' => $this->input->post('username'),
                    'password' => $password,
                    'gender' => $this->input->post('gender'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'birthday' => $this->input->post('birthday'),
                );
                $result_row = $this->user_model->editRow($id, $post);
                if ($result_row) {

                    $this->logger_model->addRow('Đã chỉnh sửa User : ' . $this->input->post('username'));
                    redirect(base_url('admin/user'));
                }
            }
        }

        $this->load->view('backend/layout/header');
        $this->load->view('backend/user/edit', $data);
        $this->load->view('backend/layout/footer');
    }

    function delete($id = NULL) {

        $result = $this->user_model->getRow($id);
        $user_login = $this->session->userdata('user_login');
        if (!$result) {
            redirect(base_url('admin/user'));
        }
        $del = $this->user_model->deleteRow($id);
        if ($del) {
            $this->logger_model->addRow('Đã xóa User : ' . $result['username']);
        }
        redirect(base_url('admin/user'));
    }

    function search() {
        if ($this->input->post('keyword')) {
            $this->session->set_userdata('keyword_user', $this->input->post('keyword'));
        }
        $limit = 2;
        $page = $this->uri->segment(5) > 1 ? $this->uri->segment(5) : 1;
        $config['base_url'] = base_url('admin/user/search/page/');
        $config['total_rows'] = $this->user_model->countRows($this->session->userdata('keyword_user'));
        $config['uri_segment'] = 5;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $result = $this->user_model->getRows($limit, ($page - 1) * $limit, $this->session->userdata('keyword_user'));
        $data = array('users' => $result);

        $this->load->view('backend/layout/header');
        $this->load->view('backend/user/index', $data);
        $this->load->view('backend/layout/footer');
    }

}

?>