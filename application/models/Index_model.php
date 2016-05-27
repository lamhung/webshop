<?php
class Index_model extends CI_Model {
    
    function index()
    {
        redirect(base_url('home'));
    }
}