<script type="text/javascript" src="<?php echo base_url('template/common/datepicker/js/datepicker.js');?>"></script>
<form name="fm_banner" id="fm_banner" method="post"  enctype="multipart/form-data">
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th><?php echo $this->lang->line('banner_weblink');?></th>
      <td><input type="text" class="txttext" name="weblink" value="<?php echo set_value('weblink',$banner['weblink']);?>" autocomplete="off" />
        (*) 
      	<?php echo form_error('weblink','<span class="form_error">','</span>');?>  
      </td>
    </tr>
    <tr>
      <th><?php echo $this->lang->line('banner_company');?></th>
      <td><input type="text" class="txttext" name="company" value="<?php echo set_value('company',$banner['company']);?>" autocomplete="off" />
        (*) 
      	<?php echo form_error('company','<span class="form_error">','</span>');?>
      </td>
    </tr>
    <tr>
      <th><?php echo $this->lang->line('banner_posted_date');?></th>
      <?php
	  	$posted_date = ($banner['posted_date'] != "") ?  date('d/m/Y',$banner['posted_date']) : '';
	  ?>
      <td><input type="text" name="posted_date" class="txttext datepicker" value="<?php echo set_value('posted_date',$posted_date);?>" autocomplete="off"  />
        (*)
        <?php echo form_error('posted_date','<span class="form_error">','</span>');?>
      </td>
    </tr>
    <tr>
      <th><?php echo $this->lang->line('banner_expiration_date');?></th>
      <?php
	  $expiration_date = ($banner['expiration_date'] != "") ?  date('d/m/Y',$banner['expiration_date']) : '';
	  ?>
      <td><input type="text" name="expiration_date" class="txttext datepicker" value="<?php echo set_value('expiration_date',$expiration_date);?>" autocomplete="off" />
        (*)
        <?php echo form_error('expiration_date','<span class="form_error">','</span>');?>
      </td>
    </tr>
    <tr>
      <th><?php echo $this->lang->line('select_image');?></th>
      <td>
      <?php 
	  	if($banner['file_name'])
		{
	  ?>
      		<div><img src="<?php echo base_url('upload/banner/'.$banner['file_name']);?>" width="300" /></div>
      <?php
		}
		else
		{
			echo "<div><img src='' /></div>";
		}
	  ?>
                <input type="file" class="txtfile" name="image"/>
      	<?php echo "<span class='form_error'>".$error."</span>";?> 
      </td>
    </tr>
    <tr>
      <th>Vị Trí</th>
     
      <td>
          <select class="select" name="position">
              <option>Vui Lọng Chọn Vị Trí</option>
              <?php
                foreach($positions as $position)
                {
              ?>
              <option value="<?php echo $position['place'];?>" <?php echo set_select('position',$position['place'],$banner['position_place'] == $position['place'])?>><?php echo $position['name'];?></option>
              <?php
                }
              ?>
          </select>
      </td>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>
<script>
  $(document).ready(function(e) {
    $( ".datepicker" ).datepicker({
			dateFormat: "mm/dd/yy"
	});
	
	
	
  });
</script>
