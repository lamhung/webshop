<script type="text/javascript" src="<?php echo base_url('template/common/datepicker/js/datepicker.js');?>"></script>
<form name="fm_user" id="fm_user" method="post" enctype="multipart/form-data" >
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th>Tên hiển thị<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="fullname" value="<?php echo set_value('fullname',$user['fullname']);?>"  />
        <?php echo form_error('fullname','<span class="form_error">','</span>') ?></td>
    </tr>
    <tr>
      <th>Tên đăng nhập<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="username" value="<?php echo set_value('username',$user['username']);?>"/>
      	<?php echo form_error('username','<span class="form_error">','</span>') ?>
      </td>
    </tr>
    <tr>
      <th>Mật khẩu<span class="req_icons">(*)</span></th>
      <td><input type="password" class="txttext" name="password" value=""  />
      	  <?php echo form_error('password','<span class="form_error">','</span>') ?>
      </td>
    </tr>
    <tr>
      <th>Xác nhận mật khẩu<span class="req_icons">(*)</span></th>
      <td><input type="password" class="txttext" name="repassword"  value="" />
      	<?php echo form_error('repassword','<span class="form_error">','</span>') ?>
      </td>
    </tr>
    <tr>
      <th>Giới tính<span class="req_icons">(*)</span></th>
      <td><p class="wap_input">
          <input type="radio" name="gender" id="rad-01" value="1" <?php echo set_radio('gender','1', $user['gender']==1); ?>/>
          <label for="rad-01">Nam</label>
        </p>
        <p class="wap_input">
          <input type="radio" name="gender" id="rad-02" value="0" <?php echo set_radio('gender','0', $user['gender']==0); ?>/>
          <label for="rad-02">Nữ</label>
        </p>
        <?php echo form_error('gender','<span class="form_error">','</span>') ?>
        
        </td>
    </tr>
    <tr>
      <th>Điện thoại<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="phone" value="<?php echo set_value('phone',$user['phone']);?>" />(*) 
        <?php echo form_error('phone','<span class="form_error">','</span>') ?>
      </td>
    </tr>
    <tr>
      <th>Email<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="email" value="<?php echo set_value('email',$user['email']);?>" />
        (*) 
        <?php echo form_error('email','<span class="form_error">','</span>') ?>
      </td>
    </tr>
    <tr>
      <th>Ngày sinh<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="birthday" value="<?php echo set_value('birthday',$user['birthday']);?>" id="datepicker" readonly="readonly" />(*)
      	<?php echo form_error('birthday','<span class="form_error">','</span>') ?>
      </td>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>
<script>
  $(document).ready(function(e) {
    $( "#datepicker" ).datepicker({
			dateFormat: "dd/mm/yy"
		});
		
  });
 </script>
