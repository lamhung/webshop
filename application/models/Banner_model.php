<?php

class Banner_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function addRow($data = array()) {
        $this->db->insert('banner', $data);

        $result = $this->db->insert_id();

        return $result;
    }

    function countRows($keyword = NULL) {
        if ($keyword != NULL) {
            $this->db->like('company', $keyword);
        }
        $this->db->from('banner');
        return $this->db->count_all_results();
    }

    function getRows($limit, $offset, $keyword = NULL) {
        if ($keyword != NULL) {
            $this->db->like('company', $keyword);
        }
        $this->db->limit($limit, $offset);
        $query = $this->db->get('banner');
        $result = $query->result_array();
        return $result;
    }

    function getRow($id = NULL) {
        $this->db->where('id', $id);
        $query = $this->db->get('banner');
        $result = $query->row_array();
        return $result;
    }

    function convertRow($data = array()) {
        if (count($data) > 0) {
            $data['file_name_'] = $data['image_width'] > 1000 ? "<img src='" . base_url('upload/banner') . '/' . $data['file_name'] . "' width='1000'>" : "<img src='" . base_url('upload/banner') . '/' . $data['file_name'] . "'>";
            $data['file_size_'] = $data['file_size'] . ' kb';
            $data['image_width_'] = $data['image_width'] . ' px';
            $data['image_height_'] = $data['image_height'] . ' px';
            $data['image_type_'] = $data['image_type'];
            $data['posted_date_'] = $data['posted_date'] ? date('d/m/Y', $data['posted_date']) : '';
            $data['expiration_date_'] = $data['expiration_date'] ? date('d/m/Y', $data['expiration_date']) : '';
        }
        return $data;
    }

    function editRow($id = NULL, $data = array()) {
        $this->db->where('id', $id);
        $query = $this->db->update('banner', $data);

        return $query;
    }

    function deleteRow($id = NULL) {
        $this->db->where('id', $id);
        $query = $this->db->delete('banner');
        return $query;
    }

    function defaultRow() {
        return array(
            'id' => NULL,
            'orig_name' => '',
            'file_name' => '',
            'file_size' => '',
            'image_width' => '',
            'image_height' => '',
            'image_type' => '',
            'weblink' => '',
            'company' => '',
            'posted_date' => '',
            'expiration_date' => ''
        );
    }

    function getBannerFromHomeTop($current_time = NULL) {
        $this->db->where('expiration_date > '.$current_time);
        $this->db->limit(4,0);
        $query = $this->db->get('banner');
        $result = $query->result_array();
        //echo $this->db->last_query();exit;
        return $result;
    }
    function getBannerFromHomeUnder($current_time = NULL) {
        $this->db->where('expiration_date > '.$current_time);
        $this->db->limit(3,3);
        $query = $this->db->get('banner');
        $result = $query->result_array();
        //echo $this->db->last_query();exit;
        return $result;
    }

}

?>
