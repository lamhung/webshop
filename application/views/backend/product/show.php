<div class="main">
  <div class="wap_main">
    <div class="act_list_content"> 
    <?php $this->load->view('backend/product/_search');?>
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/product');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/product/add');?>'>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href='<?php echo base_url('admin/product/edit');?>/<?php echo $product['id'];?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/product/delete');?>/<?php echo $product['id'];?>' onclick="return confirm('Xóa sản phẩm này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span><?php echo $product['name'];?></h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      
      
      <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
      	<tr>
          <th>Tên danh mục</th>
          <td><?php echo $product_category['name'];?></td>
        </tr>
        <tr>
          <th>Tên sản phẩm</th>
          <td><?php echo $product['name'];?></td>
        </tr>
        <tr>
          <th>Hình Đại Diện</th>
          <td><?php echo $product['image_'];?></td>
        </tr>
        <tr>
          <th>Mô tả ngắn</th>
          <td><?php echo $product['description'];?></td>
        </tr>
        <tr>
          <th>Chi tiết (VN)</th>
          <td><?php echo $product['detail'];?></td>
        </tr>
        <tr>
          <th>Giá</th>
          <td><?php echo $product['price'];?> VND</td>
        </tr>
        <tr>
          <th>Nổi Bật</th>
          <td><input type="checkbox" name="highlight" <?php if($product['highlight'] ==1) echo "checked = 'checked'";?> VND /></td>
        </tr>
        <tr>
          <th>Hình Slider</th>
          <td>
          		<?php 
                                foreach($product_images as $product_image)
                                {
			?>
                	<img src="<?php echo base_url('upload/product/slider/'.$product_image['file_name']);?>" width="100" > 
                        <?php
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
        <li><a href='<?php echo base_url('admin/product');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/product/add');?>'>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href='<?php echo base_url('admin/product/edit');?>/<?php echo $product['id'];?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/product/delete');?>/<?php echo $product['id'];?>' onclick="return confirm('Xóa sản phẩm này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT--> 
    
  </div>
  <!--END WAP MAIN--> 
  
</div>
