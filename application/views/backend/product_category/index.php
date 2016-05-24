<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
      
      
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/product_category/add');?>'>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những Danh mục sản phẩm được chọn?');">
          <p class="icons_del_32"></p>
          Xóa hết</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span>Danh mục sản phẩm</h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      
      <form name="fm_list" id="fm_list" method="post" action="http://thinhphat.local:8080/acp/product_category/delete_all">
        <table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
          <tr>
            <th width="2%"><input type="checkbox" class="check-all" /></th>
            <th width="2%">STT</th>
            <th width="">Tên danh mục </th>
            <th width="8%">Thứ tự</th>
            <th width="8%">Hình</th>
            <th width="3%">Sửa</th>
            <th width="3%">Xóa</th>
          </tr>
          <?php
		  	foreach($product_categories as $key => $product_category)
			{
		  ?>
          <tr>
            <td width=""><input type="checkbox" name="list_id[]" value="<?php echo $product_category['id'];?>"/></td>
            <td><?php echo $key+1;?></td>
            <td><?php echo $product_category['name'];?></td>
            <td><?php echo $product_category['ordinal'];?></td>
            <td>
            	<?php 
					if($product_category['image'])
					{
						echo "<img src='".base_url('upload/product/product_category/'.$product_category['image'])."' width='200'>";
					}
					else
					{
						echo "<img src=''>";
					}
				?>
            </td>
            <td><a href="<?php echo base_url('admin/product_category/edit');?>/<?php echo $product_category['id'];?>" class="icons_edit_16"></a></td>
            <td><a href="<?php echo base_url('admin/product_category/delete');?>/<?php echo $product_category['id'];?>" onclick="return confirm('Bạn muốn xóa Danh mục sản phẩm này');" class="icons_del_16"></a></td>
          </tr>
          <?php
			}
		  ?>
        </table>
      </form>
      <div class="pages">
        <?php echo $this->pagination->create_links();?>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES--> 
      
    </div>
    <!--END MAIN CONTENT-->
    
    <div class="act_list_content">
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/product_category/add');?>'>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những Danh mục sản phẩm được chọn?');">
          <p class="icons_del_32"></p>
          Xóa hết</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT--> 
    
  </div>
  <!--END WAP MAIN--> 
  
</div>
<!--END MAIN--> 

