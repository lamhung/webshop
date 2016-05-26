<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CMS -> Trang chủ</title>
        <!-- LOAD META -->
        <link type="image/x-icon" rel="shortcut icon" href="<?php echo base_url('template/fontend/images/favicon.ico'); ?>" />
        <!-- LOAD META -->

        <link href="<?php echo base_url('template/backend/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('template/common/datepicker/css/datepicker.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('template/backend/css/image.css'); ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url('template/common/jquery/jquery-2.2.3.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('template/backend/js/script.js'); ?>"></script>



    </head>

    <body>
        <div class="layout">

            <div class="header">
                <div class="wap_header">
                    <div class="logo">
                        <a href="<?php echo base_url('admin'); ?>">CMS -> WEBSHOP</a>
                    </div><!--END LOGO-->
                    <?php
                    $user_login = $this->session->userdata('user_login');
                    ?>
                    <ul class="nav_top">
                        <li><img src="" height="50" /></li>

                        <li><a href="<?php echo base_url('admin'); ?>"><p class="icons_welcome"></p><?php echo $this->lang->line('hello');?><?php echo $user_login['fullname']; ?></a></li>
                        <li><a href="<?php echo base_url('admin/me'); ?>"><p class="icons_user_info"></p><?php echo $this->lang->line('update_personal_information');?></a></li>
                        <li><a href=javascript:change_language('vietnamese')><p class="icons_vietnam"></p>Tiếng việt</a></li>
                        <li><a href=javascript:change_language('english')><p class="icons_english"></p>English</a></li>
                        <li><a href="<?php echo base_url('admin/logout'); ?>"><p class="icons_exit"></p><?php echo $this->lang->line('exit');?></a></li>
                    </ul><!--END NAV-top-->
                </div><!--END WAP HEADER-->
            </div><!--END HEADER-->

            <div class="menu">
                <div class="wap_menu">
                    <ul class="nav">
                        <li><a href="<?php echo base_url('admin'); ?>" class="home"><img src="<?php echo base_url('template/backend/images/icons/home.png'); ?>" alt="" /></a></li>

                        <li><a href="<?php echo base_url('admin/product'); ?>"><p class="icons_pro_16"></p><?php echo $this->lang->line('product');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/product_category'); ?>"><?php echo $this->lang->line('product_category');?></a></li>
                                <li><a href="<?php echo base_url('admin/product'); ?>"><?php echo $this->lang->line('product_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/product'); ?>"><p class="icons_customer"></p><?php echo $this->lang->line('user');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/user/add'); ?>"><?php echo $this->lang->line('user_add');?></a></li>
                                <li><a href="<?php echo base_url('admin/user'); ?>"><?php echo $this->lang->line('user_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/news'); ?>"><p class="icons_article"></p><?php echo $this->lang->line('news');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/news/add'); ?>"><?php echo $this->lang->line('news_add');?></a></li>
                                <li><a href="<?php echo base_url('admin/news'); ?>"><?php echo $this->lang->line('news_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/banner'); ?>"><p class="icons_banner"></p><?php echo $this->lang->line('banner');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/banner/add'); ?>"><?php echo $this->lang->line('banner_add');?></a></li>
                                <li><a href="<?php echo base_url('admin/banner'); ?>"><?php echo $this->lang->line('banner_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/order'); ?>"><p class="icons_banner"></p><?php echo $this->lang->line('orders');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/order/add'); ?>"><?php echo $this->lang->line('orders_add');?></a></li>
                                <li><a href="<?php echo base_url('admin/order'); ?>"><?php echo $this->lang->line('orders_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/order'); ?>"><p class="icons_banner"></p><?php echo $this->lang->line('logo');?></a>
                            <ul class="child">
                                <li><a href="<?php echo base_url('admin/logo/add'); ?>"><?php echo $this->lang->line('logo_add');?></a></li>
                                <li><a href="<?php echo base_url('admin/logo'); ?>"><?php echo $this->lang->line('logo_list');?></a></li>

                            </ul><!--END CHILD-->
                        </li>
                        <li><a href="<?php echo base_url('admin/logger'); ?>"><p class="icons_banner"></p><?php echo $this->lang->line('logger');?></a></li>

                    </ul><!--END NAV-->
                </div><!--END WAP MENU-->			
            </div><!--END MENU-->

            <div class="note">
                <marquee behavior="scroll" align="left" scrollamount="4" >
                    <img src="<?php echo base_url('template/backend/images/icons/news.png'); ?>" alt="" /><span>Lưu ý: Mã nguồn do công ty chúng tôi phát triển - Tuyệt đối</span> <p class="red">không xài mã nguồn mở ( joomla, wordpress... )</p> <span>- Quí khách có nhu cầu thêm chức năng vui lòng </span><p class="red">liên hệ : 0902 702 322</p>
                </marquee>
            </div><!--END NOTE-->	

            <!-- ///////////////////////////////////////////////// BEGIN MODUEL ///////////////////////////////////////////////////////////////////////--><div class="main">

