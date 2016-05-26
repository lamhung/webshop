<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->user_model->checkLogin();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('images_model');
        $this->load->model('product_image_model');
        $this->load->library('text_lib');
        $this->load->library('upload');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    public function index() {
        $limit = 10;
        $page = $this->uri->segment(4) > 1 ? $this->uri->segment(4) : 1;
        $config['base_url'] = site_url() . '/admin/product/page/';
        $config['total_rows'] = $this->product_model->countRows();
        $config['uri_segment'] = 10;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $result = $this->product_model->getRows($limit, ($page - 1) * $limit);
        //print_r($this->product_model->convert($result));exit;
        $data = array('products' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product/index', $data);
        $this->load->view('backend/layout/footer');
    }

    public function add() {
        $this->form_validation->set_rules('product_category', 'Danh Mục Sản Phẩm', 'required');
        $this->form_validation->set_rules('name', 'Tên Sản Phẩm', 'required');
        $this->form_validation->set_rules('description', 'Mô Tả', 'required');
        $this->form_validation->set_rules('detail', 'Chi Tiết', 'required');
        $this->form_validation->set_rules('price', 'Giá', 'required|numeric');
        $this->form_validation->set_message('required', '%s không được để trống ');
        $this->form_validation->set_message('numeric', '%s phải là kí tự số');
        $data = array('error' => '');

        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/product';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //mã hóa tên
                $this->upload->initialize($config);

                $user_login = $this->session->userdata('user_login');
                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $highlight = $this->input->post('highlight') ? 1 : 0;
                        $post = array(
                            'name' => $this->input->post('name'),
                            'url' => $this->text_lib->clean_url($this->input->post('name')),
                            'image' => $data['file_name'],
                            'raw_name' => $data['raw_name'],
                            'file_ext' => $data['file_ext'],
                            'description' => $this->input->post('description'),
                            'detail' => $this->input->post('detail'),
                            'price' => $this->input->post('price'),
                            'highlight' => $highlight,
                            'product_category_id' => $this->input->post('product_category'),
                            'user_id' => $user_login['id_user']
                        );
                        $id = $this->product_model->addRow($post);

                        //Thumb
                        $config_thumb = array();
                        $config_thumb['image_library'] = 'gd2';
                        $config_thumb['source_image'] = UPLOADPATH . '/product/' . $data['file_name'];
                        $config_thumb['create_thumb'] = TRUE;
                        $config_thumb['maintain_ratio'] = TRUE;
                        $config_thumb['width'] = 223;
                        $config_thumb['height'] = 297;
                        $this->load->library('image_lib', $config_thumb);
                        $this->image_lib->resize();

                        if ($id) {
                            $this->logger_model->addRow('Đã thêm mới sản phẩm : ' . $this->input->post('name'));

                            redirect(base_url('admin/product/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $data['error'] = 'Vui lòng chọn hình dại diện';
                }
            }
        }

        $data['product_images'] = $this->product_image_model->getRows(0);
        $data['product'] = $this->product_model->defaultRow();
        $data['product_categories'] = $this->product_category_model->getRowsCategory();
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product/add', $data);
        $this->load->view('backend/layout/footer');
    }

    public function show($id = NULL) {

        $result = $this->product_model->getRow($id);
        if (!$result) {
            redirect(base_url('admin/product'));
        }
        $data = array(
            'product_images' => $this->product_image_model->getRows($id),
            'product' => $this->product_model->convert_product($result),
            'product_category' => $this->product_category_model->getRow($result['product_category_id'])
        );

        $this->load->view('backend/layout/header');
        $this->load->view('backend/product/show', $data);
        $this->load->view('backend/layout/footer');
    }

    public function edit($id = NULL) {
        $this->form_validation->set_rules('product_category', 'Danh Mục Sản Phẩm', 'required');
        $this->form_validation->set_rules('name', 'Tên Sản Phẩm', 'required');
        $this->form_validation->set_rules('description', 'Mô Tả', 'required');
        $this->form_validation->set_rules('detail', 'Chi Tiết', 'required');
        $this->form_validation->set_rules('price', 'Giá', 'required|numeric');
        $this->form_validation->set_message('required', '%s không được đẻ trống ');
        $this->form_validation->set_message('numeric', '%s phải là kí tự số');
        $result = $this->product_model->getRow($id);
        $data = array('error' => '');
        $user_login = $this->session->userdata('user_login');
        if (!$result) {
            redirect(base_url('admin/product'));
        }
        if ($this->input->post('submitForm')) {
            if ($this->form_validation->run() == true) {
                $config = array();
                $config['upload_path'] = UPLOADPATH . '/product';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5120'; //5mb
                $config['encrypt_name'] = true; //mã hóa tên
                $this->upload->initialize($config);

                if ($_FILES['image']['name']) {
                    if ($this->upload->do_upload('image')) {
                        $data = $this->upload->data();
                        $highlight = $this->input->post('highlight') ? 1 : 0;
                        $post = array(
                            'name' => $this->input->post('name'),
                            'url' => $this->text_lib->clean_url($this->input->post('name')),
                            'image' => $data['file_name'],
                            'raw_name' => $data['raw_name'],
                            'file_ext' => $data['file_ext'],
                            'description' => $this->input->post('description'),
                            'detail' => $this->input->post('detail'),
                            'price' => $this->input->post('price'),
                            'highlight' => $highlight
                        );
                        $result_row = $this->product_model->editRow($id, $post);

                        //Thumb
                        $config_thumb = array();
                        $config_thumb['image_library'] = 'gd2';
                        $config_thumb['source_image'] = UPLOADPATH . '/product/' . $data['file_name'];
                        $config_thumb['create_thumb'] = TRUE;
                        $config_thumb['maintain_ratio'] = TRUE;
                        $config_thumb['width'] = 223;
                        $config_thumb['height'] = 297;
                        $this->load->library('image_lib', $config_thumb);
                        $this->image_lib->resize();

                        if ($result_row) {
                            unlink(UPLOADPATH . '/product/' . $result['image']);
                            unlink(UPLOADPATH . '/product/' . $result['raw_name'] . '_thumb' . $result['file_ext']);
                            $this->logger_model->addRow('Đã chỉnh sửa sản phẩm : ' . $this->input->post('name'));
                            redirect(base_url('admin/product/show/' . $id));
                        }
                    } else {
                        $data['error'] = $this->upload->display_errors();
                    }
                } else {
                    $highlight = $this->input->post('highlight') ? 1 : 0;
                    $post = array(
                        'name' => $this->input->post('name'),
                        'url' => $this->text_lib->clean_url($this->input->post('name')),
                        'description' => $this->input->post('description'),
                        'detail' => $this->input->post('detail'),
                        'price' => $this->input->post('price'),
                        'highlight' => $highlight
                    );

                    $result_row = $this->product_model->editRow($id, $post);
                    if ($result_row) {
                        $this->logger_model->addRow('Đã chỉnh sửa sản phẩm : ' . $this->input->post('name'));
                        redirect(base_url('admin/product/show/' . $id));
                    }
                }
            }
        }
        $result_product_image = $this->product_image_model->getRows($id);

        $data['product_images'] = $result_product_image;
        $data['product'] = $this->product_model->convert_product($result);
        $data['product_categories'] = $this->product_category_model->getRowsCategory();
        $data['product_category_row'] = $this->product_category_model->getRow($result['product_category_id']);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product/edit', $data);
        $this->load->view('backend/layout/footer');
    }

    function delete($id = NULL) {
        $result = $this->product_model->getRow($id);
        $del = $this->product_model->deleteRow($id);
        if ($del) {
            unlink(UPLOADPATH . '/product/' . $result['image']);
            unlink(UPLOADPATH . '/product/' . $result['raw_name'] . '_thumb' . $result['file_ext']);
            $this->logger_model->addRow('Đã xóa sản phẩm : ' . $result['name']);
        }
        redirect(base_url('admin/product'));
    }

    public function search() {

        if ($this->input->post('keyword')) {
            $this->session->set_userdata('keyword_product', $this->input->post('keyword'));
        }
        $limit = 5;
        $page = $this->uri->segment(5) > 1 ? $this->uri->segment(5) : 1;
        $config['base_url'] = base_url('admin/product/search/page/');
        $config['total_rows'] = $this->product_model->countRows($this->session->userdata('keyword_product'));
        $config['uri_segment'] = 5;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        //$config['page_query_string'] = TRUE;
        $config['full_tag_open'] = '<div class="pagenav">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $result = $this->product_model->getRows($limit, ($page - 1) * $limit, $this->session->userdata('keyword_product'));
        $data = array('products' => $result);
        $this->load->view('backend/layout/header');
        $this->load->view('backend/product/index', $data);
        $this->load->view('backend/layout/footer');
    }

    public function ajax_order_search() {
        $html = 'Không Tìm Thấy Sản Phẩm!';
        if ($this->input->post('order_keyword')) {
            $data = $this->product_model->searchOrder($this->input->post('order_keyword'));
            if (count($data)) {
                $html = "<table width='100%'  class='order_product_result'>
				  <tr>
					<td>STT</td>
					<td>Tên Sản Phẩm</td>
					<td>Hình Ảnh</td>
					<td>Giá</td>
					<td>Chọn</td>
				  </tr>";

                foreach ($data as $key => $product) {

                    $html.= "<tr>" .
                            "<td>" . $key . "</td>" .
                            "<td>" . $product['name'] . "</td>" .
                            "<td>hinh</td>" .
                            "<td>" . $product['price'] . "</td>" .
                            "<td><a href ='javascript:ajax_order_select(" . $product['id'] . ")'>Chọn</td>" .
                            "</tr>";
                }

                $html .= "</table>";
            }
        }

        echo json_encode(array('success' => true, 'data' => $html));
    }

    public function ajax_order_select() {


        if (!$this->session->userdata('admin_order')) {
            $this->session->set_userdata('admin_order', array());
        }

        $html = "";

        if ($this->input->post('product_id')) {
            //Lấy session ra
            $session = $this->session->userdata('admin_order');

            if (!isset($session[$this->input->post('product_id')])) {
                $session[$this->input->post('product_id')] = 1;
            } else {
                $session[$this->input->post('product_id')] += 1;
            }
            //Cập nhật lại sesion
            $this->session->set_userdata('admin_order', $session);

            $html = $this->getHtmlOrder();
        }
        echo json_encode(array('success' => true, 'data' => $html));
    }

    public function ajax_order_remove() {
        $html = "";

        if ($this->input->post('id')) {
            $session = $this->session->userdata('admin_order');
            if ($session[$this->input->post('id')]) {
                //$this->session->unset_userdata($session[$this->input->post('id')]);
                unset($session[$this->input->post('id')]);
            }
            $this->session->set_userdata('admin_order', $session);

            $html = $this->getHtmlOrder();
        }
        echo json_encode(array('success' => true, 'data' => $html));
    }

    public function ajax_order_quantity_update() {
        $quantity_update = $this->lang->line('orders_quantity_update');
        $quantity = 'nháp so';
      
        $html = "";
        if ($this->input->post('id') && $this->input->post('quantity')) {

            $session = $this->session->userdata('admin_order');

            $session[$this->input->post('id')] = $this->input->post('quantity');


            $this->session->set_userdata('admin_order', $session);

            $html = $this->getHtmlOrder();
        }
        echo json_encode(array('success' => true, 'data' => $html , 'quantity_update' => $quantity_update, 'quantity' => $quantity));
    }

    public function getHtmlOrder() {
        $session = $this->session->userdata('admin_order');
        $html = '';
        foreach ($session as $key => $value) {
            $data = $this->product_model->getRow($key);
            $html .= "<tr>" .
                    "<td>" . $key . "</td>" .
                    "<td>" . $data['name'] . "</td>" .
                    "<td>hình</td>" .
                    "<td>" . $data['price'] . "</td>" .
                    "<td><input name='quantity' type='number' min='1' value='" . $value . "' onkeyup='ajax_order_quantity_update(" . $key . ", this.value)' style='width:30px;'></td>" .
                    "<td><a href='javascript:ajax_order_remove(" . $key . ")' >Xóa</a></td>" .
                    "</tr>";
        }
        return $html;
    }

}
