<div class="main">
<div class="wap_main">
<div class="act_list_content">
  <?php $this->load->view('backend/news/_search');?>
  <!-- BUTTON ACT LIST -->
  
  <ul class="act_list">
    <li><a href='<?php echo base_url('admin/news/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những tin tức được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

<div class="main_content">
<div class="pages">
  <h1 class="title_main"><span class="icons_list_32"></span>tin tức</h1>
  <div class="pagenav" style="margin-top:15px;"> </div>
  <!--END PAGE NAV--> 
  
</div>
<!--END PAGES-->
<form name="fm_list" id="fm_list" method="post">
<table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
  <tr>
    <th width="5%"><input type="checkbox" class="check-all" /></th>
    <th width="7%">STT</th>
    <th width="24%">Tiêu đề tin tức</th>
    <th width="21%">Mô Tả</th>
    <th width="21%">Chi Tiết</th>
    
    <th width="6%">Sửa</th>
    <th width="6%">Xóa</th>
  </tr>
  <?php 
  	foreach($news as $key => $new)
	{
  ?>
  <tr>
    <td width="5%"><input type="checkbox" name="list_id[]" value="2"/></td>
    <td><?php echo $key+1;?></td>
    <td><a href="<?php echo base_url('admin/news/show');?>/<?php echo $new['id'];?>"><?php echo $new['title'];?></a></td>
    <td><?php echo $new['description'];?></td>
    <td><?php echo $new['detail'];?></td>
    
    <td><a href="<?php echo base_url('admin/news/edit')?>/<?php echo $new['id'];?>" class="icons_edit_16"></a></td>
    <td><a href="<?php echo base_url('admin/news/delete')?>/<?php echo $new['id'];?>" onclick="return confirm('Bạn muốn xóa tin tức này');" class="icons_del_16"></a></td>
  </tr>
  <?php
	}
  ?>
</table>
</form>

<div class="pages">
 
  <!--END PAGE NAV--> 
  	<?php echo $this->pagination->create_links()?>
</div>
<!--END PAGES--><!--END MAIN CONTENT-->

<div class="act_list_content">
  <ul class="act_list">
    <li><a href='<?php echo base_url('admin/news/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những tin tức được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

</div>
<!--END WAP MAIN-->

</div>
<!--END MAIN--> 

