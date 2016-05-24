
<?php 
	foreach($product_images as $product_image)
	{
?>
<div id='list_images'>
  <div class="wrapper_image">
    <div class="img"><img src="<?php echo base_url('upload/product/slider/'.$product_image['file_name']);?>" > </div>
    <div class="ac_img"><span class="button">[<a href='javascript:product_image_remove(<?php echo $product_image['id'];?>)'>Xóa</a>]</span> </div>
  </div>
</div>
<?php
	}
?>
