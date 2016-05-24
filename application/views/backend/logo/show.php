<div class="main">
<div class="wap_main">
  <div class="act_list_content">
  	<ul class="ajax_list">
  <li class="search_bar">
    <form name="fr_search" method="post" action="http://webshop.local:8080/admin/banner/search">
      <input type="text" name="keyword" class="txtsearch" onClick="this.value = ''" value="" />
      <input type="submit" name="btn_search" class="btn_search_bar" value="" />
      <input type="hidden" name="searchSubmit" value="searchSubmit" />
    </form>
  </li>
</ul>
    <!-- BUTTON ACT LIST -->
    <ul class="act_list">
      <li><a href='<?php echo base_url('admin/logo');?>'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='<?php echo base_url('admin/logo/add');?>'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='<?php echo base_url('admin/logo/edit/'.$logo['id']);?>'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='<?php echo base_url('admin/logo/delete/'.$logo['id']);?>' onclick="return confirm('Xóa sản phẩm này?');">
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
        <td><?php echo $logo['weblink'];?></td>
      </tr>
      <tr>
        <th>Trạng thái</th>
        <td><?php if($logo['display']==0) echo 'Hiện';else echo 'Ẩn';?></td>
      </tr>
      <tr>
        <th>Hình</th>
        <td>
        		<img src="<?php echo base_url('upload/logo/'.$logo['file_name']);?>" width="300" />
        </td>
      </tr>
      <tr>
        <th>Kích Thước</th>
        <td><?php echo $logo['image_width'];?> px * <?php echo $logo['image_height'];?> px</td>
      </tr>
      <tr>
        <th>Loại Hình</th>
        <td><?php echo $logo['image_type'];?></td>
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
      <li><a href='http://webshop.local:8080/admin/banner'>
        <p class="icons_list_32"></p>
        Danh sách</a></li>
      <li><a href='http://webshop.local:8080/admin/banner/add'>
        <p class='icons_add_32'></p>
        Thêm mới</a></li>
      <li><a href='http://webshop.local:8080/admin/banner/edit/6'>
        <p class="icons_save_32"></p>
        Sửa</a></li>
      <li><a href='http://webshop.local:8080/admin/banner/delete/6' onclick="return confirm('Xóa sản phẩm này?');">
        <p class="icons_del_32"></p>
        Xóa</a></li>
    </ul>
    <!--END ACT LIST--> 
    
  </div>
  <!--END ACT LIST CONTENT--> 
  
</div>
<!--END WAP MAIN--> 
</div>