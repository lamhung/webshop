<div class="main">
    <div class="wap_main">
        <div class="act_list_content">
            <?php $this->load->view('backend/banner/_search'); ?>
            <!-- BUTTON ACT LIST -->
            <div class="act_list_content">
                <ul class="act_list">
                    <li><a href='<?php echo base_url('admin/banner'); ?>'>
                            <p class="icons_list_32"></p>
                            <?php echo $this->lang->line('list'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/add'); ?>'>
                            <p class='icons_add_32'></p>
                            <?php echo $this->lang->line('add_new'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/edit/' . $banner['id']); ?>'>
                            <p class="icons_save_32"></p>
                            <?php echo $this->lang->line('edit'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/delete/' . $banner['id']); ?>' onclick="return confirm('Xóa sản phẩm này?');">
                            <p class="icons_del_32"></p>
                            <?php echo $this->lang->line('delete'); ?></a></li>
                </ul>
                <!--END ACT LIST--> 

            </div>
            <!--END ACT LIST CONTENT-->

            <div class="main_content">
                <div class="pages">
                    <h1 class="title_main"><span class="icons_list_32"></span><?php echo $this->lang->line('banner'); ?></h1>
                    <div class="pagenav" style="margin-top:15px;"> </div>
                    <!--END PAGE NAV--> 
                </div>
                <!--END PAGES-->

                <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
                    <tr>
                        <th><?php echo $this->lang->line('banner_weblink'); ?></th>
                        <td><?php echo $banner['weblink']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_company'); ?></th>
                        <td><?php echo $banner['company']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_posted_date'); ?></th>
                        <td><?php echo $banner['posted_date_']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_expiration_date'); ?></th>
                        <td><?php echo $banner['expiration_date_']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_image'); ?></th>
                        <td><?php echo $banner['file_name_']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_file_size'); ?></th>
                        <td><?php echo $banner['image_width_'] . ' * ' . $banner['image_height_']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_image_type'); ?></th>
                        <td><?php echo $banner['image_type_']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $this->lang->line('banner_position'); ?></th>
                        <td><?php echo $position['name']; ?></td>
                    </tr>
                </table>
                <div class="pages">
                    <div class="pagenav"> </div>
                    <!--END PAGE NAV--> 

                </div>
                <!--END PAGES--> 

            </div>
            <!--END MAIN CONTENT-->

            <div class="act_list_content">
                <ul class="act_list">
                    <li><a href='<?php echo base_url('admin/banner'); ?>'>
                            <p class="icons_list_32"></p>
                            <?php echo $this->lang->line('list'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/add'); ?>'>
                            <p class='icons_add_32'></p>
                            <?php echo $this->lang->line('add_new'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/edit/' . $banner['id']); ?>'>
                            <p class="icons_save_32"></p>
                            <?php echo $this->lang->line('edit'); ?></a></li>
                    <li><a href='<?php echo base_url('admin/banner/delete/' . $banner['id']); ?>' onclick="return confirm('Xóa sản phẩm này?');">
                            <p class="icons_del_32"></p>
                            <?php echo $this->lang->line('delete'); ?></a></li>
                </ul>
                <!--END ACT LIST--> 

            </div>
            <!--END ACT LIST CONTENT--> 

        </div>
        <!--END WAP MAIN--> 
