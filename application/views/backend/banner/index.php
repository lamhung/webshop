
<div class="main">
<div class="wap_main">
<div class="act_list_content">
<?php $this->load->view('backend/banner/_search');?>
  <!-- BUTTON ACT LIST -->
  
  <ul class="act_list">
    <li><a href='<?php echo base_url('admin/banner/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những banner được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

<div class="main_content">
<div class="pages">
  <h1 class="title_main"><span class="icons_list_32"></span>banner</h1>
  <div class="pagenav" style="margin-top:15px;"> </div>
  <!--END PAGE NAV--> 
  
</div>
<!--END PAGES-->

<form name="fm_list" id="fm_list" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
  <tr>
    <th width="2%"><input type="checkbox" class="check-all" /></th>
    <th width="2%">STT</th>
    <th width="30%">Tên banner</th>
    <th width="15%">Website</th>
    <th width="15%">Công ty</th>
    <th width="8%">Ngày Đăng</th>
     <th width="8%">Ngày Hết Hạn</th>
    <th width="5%">Sửa</th>
    <th width="5%">Xóa</th>
  </tr>
  
  <?php
  	foreach($banners as $key => $banner)
	{
  ?>
  <tr>
    <td width="2%"><input type="checkbox"/></td>
    <td><?php echo $key+1;?></td>
    <td><img src='<?php echo base_url('upload/banner').'/'.$banner['file_name']?>' width='300' /> <br />
      <br />
      <a href="<?php echo base_url('admin/banner/show/'.$banner['id']);?>"><?php echo $banner['orig_name'];?></a></td>
    <td><?php echo $banner['weblink'];?></td> 
    <td><?php echo $banner['company'];?></td>  
    <td><?php echo date("d-m-Y", $banner['posted_date']);?></td>
     <td><?php echo date("d-m-Y", $banner['expiration_date']);?></td>
    <td><a href="<?php echo base_url('admin/banner/edit/'.$banner['id'])?>" class="icons_edit_16"></a></td>
    <td><a href="<?php echo base_url('admin/banner/delete/'.$banner['id'])?>" onclick="return confirm('Bạn muốn xóa banner này');" class="icons_del_16"></a></td>
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
    <li><a href='<?php echo base_url('admin/banner/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những banner được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

</div>
<!--END WAP MAIN-->

</div>
<!--END MAIN--