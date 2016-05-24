<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
<link href="<?php echo base_url('template/backend/css/login.css');?>" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->

<script type="<?php echo base_url('template/common/jquery/jquery-1.8.2.js');?>"></script>

<!--Slider-in icons-->

<script type="text/javascript">

$(document).ready(function() {

	$(".username").focus(function() {

		$(".user-icon").css("left","-48px");

	});

	$(".username").blur(function() {

		$(".user-icon").css("left","0px");

	});

	

	$(".password").focus(function() {

		$(".pass-icon").css("left","-48px");

	});

	$(".password").blur(function() {

		$(".pass-icon").css("left","0px");

	});

});

</script>
</head>

<body>
<div id="wrapper">
  <div class="user-icon"></div>
  <div class="pass-icon"></div>
  <form name="login-form" class="login-form" action="<?php echo base_url('admin/login')?>" method="post">
    <div class="header">
      <h1>Login</h1>
      <span><?php echo $error;?></span>
    </div>
    <div class="content">
      <input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" />
      <?php echo form_error('username');?>
      <input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" />
      <?php echo form_error('password');?>
    </div>
    <div class="footer">
      <input type="submit" name="submit" value="Login" class="button" />
    </div>
  </form>
</div>
<div class="gradient"></div>
</body>
</html>