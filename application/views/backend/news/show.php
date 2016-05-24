<div class="main">
<div class="wap_main">
  <div class="act_list_content"> 
    <!-- BUTTON ACT LIST -->
    
    <ul class="act_list">
      <li><a href='<?php echo base_url('admin/news');?>'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='<?php echo base_url('admin/news/add');?>'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='<?php echo base_url('admin/news/edit');?>/<?php echo $news['id'];?>'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='<?php echo base_url('admin/news/delete');?>/<?php echo $news['id'];?>' onclick="return confirm('Xóa sản phẩm này?');">
        <p class="icons_del_32"></p>
        Xóa</a></li>
    </ul>
    <!--END ACT LIST--> 
    
  </div>
  <!--END ACT LIST CONTENT-->
  
  <div class="main_content">
    <div class="pages">
      <h1 class="title_main"><span class="icons_list_32"></span>Tin Tức</h1>
      <div class="pagenav" style="margin-top:15px;"> </div>
      <!--END PAGE NAV--> 
      
    </div>
    <!--END PAGES-->
    
    <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
      <tr>
        <th>Tiêu Đề</th>
        <td><?php echo $news['title'];?></td>
      </tr>
      <tr>
        <th>Hình</th>
        <td><?php echo $news['image_'];?></td>
      </tr>
      <tr>
        <th>Mô Tả</th>
        <td><?php echo $news['description'];?></td>
      </tr>
      <tr>
        <th>Chi tiết</th>
        <td><?php echo $news['detail'];?></td>
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
      <li><a href='<?php echo base_url('admin/news');?>'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='<?php echo base_url('admin/news/add');?>'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='<?php echo base_url('admin/news/edit');?>/<?php echo $news['id'];?>'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='<?php echo base_url('admin/news/delete');?>/<?php echo $news['id'];?>' onclick="return confirm('Xóa sản phẩm này?');">
        <p class="icons_del_32"></p>
        Xóa</a></li>
    </ul>
    <!--END ACT LIST--> 
    
  </div>
  <!--END ACT LIST CONTENT--> 
  
</div>
<!--END WAP MAIN-->

</div>
