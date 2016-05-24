<form name="fm_product_category" id="fm_product_category" method="post"  enctype="multipart/form-data">
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th>Tên Danh Mục Sản Phẩm </th>
      <td><input type="text" class="txttext" name="name" value="<?php echo set_value('name',$product_category['name']);?>" />
        (*) 
       <?php echo form_error('name',"<span class = 'form_error'>",'</span>');?>
       </td>
    </tr>
    <tr>
      <th>Thứ Tự</th>
      <td><input type="text" class="txttext" name="ordinal" value="<?php echo set_value('ordinal',$product_category['ordinal']);?>"  />
        (*) 
       <?php echo form_error('ordinal',"<span class = 'form_error'>",'</span>');?> 
       </td>
    </tr>
    <tr>
      <th>Hình</th>
      <td>
      <div>
      <?php 
			if($product_category['image'])
			{
				echo "<img src='".base_url('upload/product/product_category/'.$product_category['image'])."' width='300'>";
			}
			else
			{
				echo "<img src=''>";
			}
		?>
       </div>
      <input type="file" class="txttext" name="image" value="" />
      <?php echo "<span class='form_error'>".$error."</span>";?>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>
