
 <script type="text/javascript" src="<?php echo base_url('template/common/ckeditor/ckeditor.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('template/backend/js/image.js');?>"></script>
<form name="fm_news" id="fm_news" method="post"  enctype="multipart/form-data">
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th>Tiêu Đề</th>
      <td><input type="text" class="txttext" name="title" value="<?php echo set_value('title',$news['title'])?>" />
        (*)
        <?php echo form_error('title',"<span class='form_error'>","</span>");?>
      </td>
    </tr>
    <tr>
      <th>Hình</th>
      <td>
      <?php 
	  	if($news['image'])
		{
	  ?>
      		<div><img src="<?php echo base_url('upload/news/'.$news['image']);?>" width="300" /></div>
      <?php
		}
		else
		{
			echo "<div><img src='' /></div>";
		}
	  ?>
      <input type="file" class="txttext" name="image" value="" />
      <?php echo "<span class='form_error'>".$error."</span>";?>
      </td>
    </tr>
    <tr>
      <th>Mô Tả</th>
      <td><textarea name="description" class="textarea"><?php echo set_value('description',$news['description'])?></textarea>
        (*)
         <?php echo form_error('description',"<span class='form_error'>","</span>");?> 
      </td>
    </tr>
    <tr>
      <th>Chi Tiết</th>
      <td><textarea name="detail" id="textarea_editor" class="textarea"><?php echo set_value('detail', $news['detail']);?></textarea>(*)
            	<fieldset style="border:1px solid #CCC;" dir="rtl" >
                <iframe name="image_iframe" id="image_iframe" width="100%" scrolling="yes" frameborder="0" height="250" src="<?php echo base_url('admin/images?table_name=news&table_id='.$news['id']);?>"></iframe>
                <legend style="font-size:14px; margin-right:50px; padding:0 10px 0 10px;"> Chỉ tải lên các hình có định dạng là <strong>jpg | png | gif</strong> và không vượt quá 5MB</legend>
                </fieldset>
				<?php echo form_error('detail','<span class="form_error">','</span>') ;?>            
       </td>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>
 <script type='text/javascript'>CKEDITOR.replace('textarea_editor');</script>
      