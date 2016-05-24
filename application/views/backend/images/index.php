<link href="<?php echo base_url('template/backend/css/image.css');?>" rel="stylesheet" type="text/css" />

    <div id="image_up">
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <input type="file" name="images[]" id="images" multiple />
        <input type="submit" name="submit" id="submit" value="Up Load" class="btn_submit" />
      
        
      </form>
    </div>
    <div id="list_images">
      <?php
        foreach($images as $image)
        {
			
        
    ?>
      <div class="wrapper_image">
        <div class="img"><img src="<?php echo base_url('upload').'/'.$image['path_folder'].'/'.$image['raw_name'].'_thumb'.$image['file_ext'];?>" > </div>
        <div class="ac_img">
            <span class="button">[<a href="javascript:parent.insertImage('<?php echo base_url('upload'.'/'.$image['file_name']);?>')" class="insert_image">Image</a>]</span>&nbsp; 
            <span class="button">[<a href="javascript:parent.insertThumb('<?php echo base_url('upload').'/'.$image['path_folder'].'/'.$image['raw_name'].'_thumb'.$image['file_ext'];?>')">Thumb</a>]</span>&nbsp; 
            <span class="button">[<a href="<?php echo base_url('admin/images/delete');?>/<?php echo $image['id'];?>/?table_name=<?php echo $image['table_name'];?>&table_id=<?php echo $image['table_id'];?>" onclick="parent.deleteImage('<?php echo base_url('upload'.'/'.$image['file_name']);?>','<?php echo base_url('upload').'/'.$image['path_folder'].'/'.$image['raw_name'].'_thumb'.$image['file_ext'];?>')">Xóa</a>]</span>
        </div>
      </div>
      <?php
        }
     ?>
    </div> 