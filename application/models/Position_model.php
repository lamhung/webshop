<?php
class Position_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getRows()
    {
        $query = $this->db->get('position');
        return $query->result_array();
    }
    function getRow($place = NULL)
    {
        $this->db->where('place',$place);
        $query = $this->db->get('position');
        return $query->row_array();
    }
}
?>