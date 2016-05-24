<div class="main">
<div class="wap_main">
<div class="act_list_content">
  </ul>
  <!-- BUTTON ACT LIST -->
  <ul class="act_list">
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

<div class="main_content">
<div class="pages">
  <h1 class="title_main"><span class="icons_list_32"></span>Lịch sử truy cập</h1>
  <?php echo $this->pagination->create_links();?>
  <!--END PAGE NAV--> 
  
</div>
<!--END PAGES-->

<form name="fr_list_seo" id="fr_list_seo" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
  <tr>
    <th width="2%"><input type="checkbox" class="check-all" /></th>
    <th width="2%">STT</th>
    <th width="20%">Thành viên</th>
    <th width="">Nội dung</th>
    <th width="15%">Ngày tạo</th>
    <th width="10%">IP</th>
  </tr>
  <?php
  	foreach($loggers as $key => $logger)
	{
  ?>
  <tr>
    <td width="2%"><input type="checkbox" name="list_id[]" value="555"/></td>
    <td><?php echo $key+1;?></td>
    <td><div align="left"><?php echo $logger['username'];?></div></td>
    <td><div align="left"><?php echo $logger['content']?></div></td>
    <td><?php echo date('d/m/Y h:i:s:A',$logger['created_at']);?></td>
    <td><?php echo $logger['ip'];?></td>
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
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

</div>
<!--END WAP MAIN--> 

