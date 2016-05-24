<div class="main">
<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
    
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/product_category');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/product_category/edit');?>/<?php echo $product_category['id'];?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/product_category/delete');?>/<?php echo $product_category['id'];?>' onclick="return confirm('Xóa thành viên này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span><?php echo $product_category['name'];?></h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      
      <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
        <tr>
          <th>Tên danh mục sản phẩm</th>
          <td><?php echo $product_category['name'];?></td>
        </tr>
        <tr>
          <th>Số thứ tự</th>
          <td><?php echo $product_category['ordinal'];?></td>
        </tr>
        <tr>
          <th>Hình</th>
          <td>
          		<?php 
					if($product_category['image'])
					{
						echo "<img src='".base_url('upload/product/product_category/'.$product_category['image'])."'>";
					}
					else
					{
						echo "<img src=''>";
					}
				?>
          </td>
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
        <li><a href='<?php echo base_url('admin/product_category');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/product_category/edit/4');?>/<?php echo $product_category['id'];?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/product_category/delete/4');?>/<?php echo $product_category['id'];?>' onclick="return confirm('Xóa thành viên này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT--> 
    
  </div>
  <!--END WAP MAIN--> 
  
</div>
<!--END MAIN--> 
