<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array();
        $result = $this->product_model->getProductNew(8, 0);
        $result_highlight = $this->product_model->getProductHighlight();
        $current_time = strtotime(date('m/d/y',time()));
        $result_bannerTop = $this->banner_model->getBannerFromHomeTop($current_time);
        $result_bannerUnder = $this->banner_model->getBannerFromHomeUnder($current_time);
        $data['products'] = $result;
        $data['products'] = $result;
        $data['products_highlight'] = $result_highlight;
        $data['banners'] = $result_bannerTop;
        $data['banners_under'] = $result_bannerUnder;
        $title = array('title_page' => 'webshop.local');
        //print_r($result_banner);exit;
        $this->load->view('fontend/layout/header',$title);
        $this->load->view('fontend/home/index', $data);
        $this->load->view('fontend/layout/footer');
    }

}
