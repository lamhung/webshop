<div class="main">
<div class="wap_main">
  <div class="act_list_content">
  	<?php $this->load->view('backend/banner/_search');?>
    <!-- BUTTON ACT LIST -->
    <ul class="act_list">
      <li><a href='<?php echo base_url('admin/banner');?>'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='<?php echo base_url('admin/banner/add');?>'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='<?php echo base_url('admin/banner/edit/'.$banner['id']);?>'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='<?php echo base_url('admin/banner/delete/'.$banner['id']);?>' onclick="return confirm('Xóa sản phẩm này?');">
        <p class="icons_del_32"></p>
        Xóa</a></li>
    </ul>
    <!--END ACT LIST--> 
    
  </div>
  <!--END ACT LIST CONTENT-->
  
  <div class="main_content">
    <div class="pages">
      <h1 class="title_main"><span class="icons_list_32"></span>lamhung</h1>
      <div class="pagenav" style="margin-top:15px;"> </div>
      <!--END PAGE NAV--> 
    </div>
    <!--END PAGES-->
    
    <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
      <tr>
        <th>Website</th>
        <td><?php echo $banner['weblink'];?></td>
      </tr>
      <tr>
        <th>Công Ty</th>
        <td><?php echo $banner['company'];?></td>
      </tr>
      <tr>
        <th>Ngày Đăng</th>
        <td><?php echo $banner['posted_date_'];?></td>
      </tr>
      <tr>
        <th>Ngày Hết Hạn</th>
        <td><?php echo $banner['expiration_date_'];?></td>
      </tr>
      <tr>
        <th>Hình</th>
        <td><?php echo $banner['file_name_'];?></td>
      </tr>
      <tr>
        <th>Kích Thước</th>
        <td><?php echo $banner['image_width_'].' * '.$banner['image_height_'];?></td>
      </tr>
      <tr>
        <th>Loại Hình</th>
        <td><?php echo $banner['image_type_'];?></td>
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
      <li><a href='<?php echo base_url('admin/banner');?>'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='<?php echo base_url('admin/banner/add');?>'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='<?php echo base_url('admin/banner/edit/'.$banner['id']);?>'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='<?php echo base_url('admin/banner/delete/'.$banner['id']);?>' onclick="return confirm('Xóa sản phẩm này?');">
        <p class="icons_del_32"></p>
        Xóa</a></li>
    </ul>
    <!--END ACT LIST--> 
    
  </div>
  <!--END ACT LIST CONTENT--> 
  
</div>
<!--END WAP MAIN--> 
