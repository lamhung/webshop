<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->user_model->checkLogin();
        $this->load->model('images_model');
        $this->load->library('upload');
        $this->lang->load('backend', $this->session->userdata('language'));
    }

    function index() {
        $table_name = $this->input->get('table_name') ? $this->input->get('table_name') : "";
        $table_id = $this->input->get('table_id') ? $this->input->get('table_id') : "";
        if ($this->input->post('submit')) {
            $this->images_model->createFolder(date('Y/m', time()));
            $config = array();
            $config['upload_path'] = UPLOADPATH . '/' . date('Y/m', time());
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = '5120'; //5mb
            $config['encrypt_name'] = true; //Tạo Tên
            $files = $_FILES;
            $cpt = count($_FILES['images']['name']);
            $user_login = $this->session->userdata('user_login');

            for ($i = 0; $i < $cpt; $i++) {

                $_FILES['images']['name'] = $files['images']['name'][$i];
                $_FILES['images']['type'] = $files['images']['type'][$i];
                $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                $_FILES['images']['error'] = $files['images']['error'][$i];
                $_FILES['images']['size'] = $files['images']['size'][$i];
                $this->upload->initialize($config);

                if ($this->upload->do_upload('images')) {

                    $data = $this->upload->data();

                    $post = array(
                        'orig_name' => $data['orig_name'],
                        'file_name' => date('Y/m', time()) . '/' . $data['file_name'],
                        'file_size' => $data['file_size'],
                        'image_width' => $data['image_width'],
                        'image_height' => $data['image_height'],
                        'image_type' => $data['image_type'],
                        'raw_name' => $data['raw_name'],
                        'file_ext' => $data['file_ext'],
                        'path_folder' => date('Y/m', time()),
                        'user_id' => $user_login['id_user'],
                        'table_name' => $table_name,
                        'table_id' => $table_id,
                    );
                    $this->images_model->addRow($post);

                    //Thumb
                    $config_thumb = array();
                    $config_thumb['image_library'] = 'gd2';
                    $config_thumb['source_image'] = UPLOADPATH . '/' . date('Y/m', time()) . '/' . $data['file_name'];
                    $config_thumb['create_thumb'] = TRUE;
                    $config_thumb['maintain_ratio'] = TRUE;
                    $config_thumb['width'] = 220;
                    $config_thumb['height'] = 180;
                    $this->load->library('image_lib', $config_thumb);
                    $this->image_lib->resize();
                }
                /* echo '<pre>';
                  print_r($config_thumb);
                  echo '</pre>'; */
            }
        }
        $result = $this->images_model->getRows($table_name, $table_id);

        $getimage = array(
            'images' => $result
        );

        $this->load->view('backend/images/index', $getimage);
    }

    function delete($id = NULL) {


        $result = $this->images_model->getRow($id);
        $data = array('image' => $result);
        $table_name = $this->input->get('table_name') ? $this->input->get('table_name') : "";
        $table_id = $this->input->get('table_id') ? $this->input->get('table_id') : "";

        if (!$result) {
            redirect(base_url('admin/images?table_name=' . $table_name . '&table_id=' . $table_id));
        }
        $del = $this->images_model->deleteRow($id);
        if ($del) {
            unlink(UPLOADPATH . '/' . $data['image']['file_name']);
            unlink(UPLOADPATH . '/' . $data['image']['path_folder'] . '/' . $data['image']['raw_name'] . '_thumb' . $data['image']['file_ext']);
        }


        redirect(base_url('admin/images?table_name=' . $table_name . '&table_id=' . $table_id));
    }

}

?>