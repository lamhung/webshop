<form name="fm_logo" id="fm_logo" method="post"  enctype="multipart/form-data">
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th>Website</th>
      <td><input type="text" class="txttext" name="weblink" value="<?php echo set_value('weblink',$logo['weblink']);?>" autocomplete="off" />
        (*)
        <?php echo form_error('weblink',"<span class='form_error'>",'</span>');?>
      </td>
    </tr>
    <tr>
      <th>Trạng Thái</th>
      <td><select name="display" id="display" class="select">
          <option value="0">Hiện</option>
          <option value="1" <?php if($logo['display'] ==1) echo "selected = 'selected'";?>>Ẩn</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Chọn Hình</th>
      <td>
		  <?php 
            if($logo['file_name'])
            {
          ?>
                <div><img src="<?php echo base_url('upload/logo/'.$logo['file_name']);?>" width="300" /></div>
          <?php
            }
            else
            {
                echo "<div><img src='' /></div>";
            }
          ?>
      
        <input type="file" class="txtfile" name="image" />
        <?php echo "<span class='form_error'>".$error."</span>";?>
      </td>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>
