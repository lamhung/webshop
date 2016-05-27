<script type="text/javascript" src="<?php echo base_url('template/common/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('template/backend/js/image.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('template/common/jquery/jquery.form.js');?>"></script>
<form name="fm_product" id="fm_product" method="post"  enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
<tr>
  <th>Nhóm Sản Phẩm</th>
  <td>
  		<select name="product_category" class="select">
        	<option value="">Vui lòng chọn danh mục sản phẩm</option>
            <?php
			foreach($product_categories as $product_category)
			{
			?>
            	<option value="<?php echo $product_category['id'];?>" <?php echo set_select('product_category', $product_category['id'], $product['product_category_id'] ==$product_category['id']); ?>><?php echo $product_category['name'];?></option>
            <?php
			}
			?>
        </select>
         <?php echo form_error('product_category','<span class="form_error">','</span>'); ?>
  </td>
</tr>
<tr>
  <th>Tên sản phẩm </th>
  <td><input type="text" class="txttext" name="name" value="<?php echo set_value('name', $product['name']);?>" />
    (*) <?php echo form_error('name','<span class="form_error">','</span>'); ?></td>
</tr>
<tr>
  <th>Hình</th>
  <td><?php 
				if($product['image'])
				{
			  ?>
    <div><?php echo $product['image_'];?></div>
    <?php
				}
				else
				{
					echo "<div><img src='' /></div>";
				}
			  ?>
    <input type="file" class="txttext" name="image" value="" />
    <?php echo "<span class='form_error'>".$error."</span>";?></td>
</tr>
<tr>
  <th>Mô Tả</th>
  <td><textarea name="description" class="textarea"><?php echo set_value('description', $product['description']);?></textarea>
    (*) <?php echo form_error('description','<span class="form_error">','</span>') ?></td>
</tr>
<tr>
  <th>Chi Tiết</th>
  <td><textarea name="detail" id="textarea_editor" class="textarea"><?php echo set_value('detail', $product['detail']);?></textarea>
    (*)
    <fieldset style="border:1px solid #CCC;" dir="rtl" >
      <iframe name="image_iframe" id="image_iframe" width="100%" scrolling="yes" frameborder="0" height="250" src="<?php echo base_url('admin/images?table_name=product&table_id='.$product['id']);?>"></iframe>
      <legend style="font-size:14px; margin-right:50px; padding:0 10px 0 10px;"> Chỉ tải lên các hình có định dạng là <strong>jpg | png | gif</strong> và không vượt quá 5MB</legend>
    </fieldset>
    <?php echo form_error('detail','<span class="form_error">','</span>') ;?></td>
</tr>
<tr>
  <th>Giá</th>
  <td><input type="text" class="txttext" name="price" value="<?php echo set_value('price', $product['price']);?>" />
    (*) <?php echo form_error('price','<span class="form_error">','</span>') ?></td>
</tr>
<tr>
  <th>Nổi Bật</th>
  <td><input type="checkbox" name="highlight"  value="1" <?php if($product['highlight'] == 1) echo "checked = 'checked'";?>/>
   <?php echo form_error('price','<span class="form_error">','</span>') ?></td>
</tr>
</table>
<input type="hidden" name="submitForm" value="submitForm" />
</form>
<table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
<tr>
  <th>Hình slider</th>
  <td>
    <form method="post" name="product_image_upload_fm" id="product_image_upload_fm" enctype="multipart/form-data" action="<?php echo base_url('backend/product/product_image');?>">
      <input type="hidden" name="image_form_submit" value="1"/>
      <input type="file" name="product_image[]" id="product_image" multiple class="txttext" style="height:30px;">
      <input type="hidden" name="product_id" value="<?php echo ($product['id'] == 0)?0:$product['id'] ;?>">
      <div class="loading" style="display:none;"><img src="<?php echo base_url('template/backend/images/loading.gif')?>"/></div>
    </form>
    <div id = "product_image_preview" style="width:100%;float:left" >
    	<?php 
			foreach($product_images as $product_image)
			{
		?>
            <div id="list_images">
              <div class="wrapper_image">
                <div class="img"><img src="<?php echo base_url('upload/product/slider/'.$product_image['file_name']);?>" > </div>
                <div class="ac_img"><span class="button">[<a href='javascript:product_image_remove(<?php echo $product_image['id'];?>)'>Xóa</a>]</span> </div>
              </div>
            </div>
		<?php
			}
		?>
    </div>
  </td>
</tr>
</table>
<script type='text/javascript'>CKEDITOR.replace('textarea_editor');</script> 
