<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    function __construct() {
        parent :: __construct();
        $this->load->model('index_model');
    }
    public function index()
    {
        $this->index_model->index();
    }
    
    public function test()
    {
        echo '123';
        exit;
    }
}
