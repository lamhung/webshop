<div class="main">
<div class="wap_main">
<div class="act_list_content">
 <?php $this->load->view('backend/product/_search');?>
  
  <!-- BUTTON ACT LIST -->
  
  <ul class="act_list">
    <li><a href='<?php echo base_url('admin/product/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những sản phẩm được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

<div class="main_content">
<div class="pages">
    <h1 class="title_main"><span class="icons_list_32"></span>Sản Phẩm</h1>
  <div class="pagenav" style="margin-top:15px;"> </div>
  <!--END PAGE NAV--> 
  
</div>
<!--END PAGES-->

<form name="fm_list" id="fm_list" method="post" action="<?php echo base_url('admin/product/delete_all')?>">
<table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
  <tr>
    <th width="2%"><input type="checkbox" class="check-all" /></th>
    <th width="2%">STT</th>
    <th width="15%"><?php echo $this->lang->line('product_name') ;?></th>
    <th width="15%"><?php echo $this->lang->line('product_image') ;?></th>
    <th width="10%"><?php echo $this->lang->line('product_description') ;?></th>
    <th width="10%"><?php echo $this->lang->line('Price') ;?></th>
    <th width="3%">Sửa</th>
    <th width="3%">Xóa</th>
  </tr>
  <?php
  if(count($products) > 0)
  {
	foreach($products as $key => $product)
	{
  ?>
  <tr>
    <td width="2%"><input type="checkbox" name="list_id[]" value="95"/></td>
    <td><?php echo $key+1;?></td>
    <td><a href='<?php echo base_url('admin/product/show')?>/<?php echo $product['id'];?>'><?php echo $product['name'];?></a></td>
    <td><?php echo "<img src='".base_url('upload/product/'.$product['image'])."' width='200'>" ;?></td>
    <td><?php echo $product['description'];?></td>
    <td><?php echo $product['price'];?></td>
    <td><a href="<?php echo base_url('admin/product/edit')?>/<?php echo $product['id'];?>" class="icons_edit_16">Sửa</a></td>
    <td><a href="<?php echo base_url('admin/product/delete')?>/<?php echo $product['id'];?>" onclick="return confirm('Bạn muốn xóa sản phẩm này');" class="icons_del_16"></a></td>
  </tr>
  <?php
    }
  }
  else
  {
  ?>
  <tr>
  		<td colspan="7">Không có sản phẩm nào!</td>
  </tr>
  <?php }?>
</table>
<form>
<div class="pages"> <?php echo $this->pagination->create_links();?> 
  <!--END PAGE NAV--> 
  
</div>
<!--END PAGES--> 

<!--END MAIN CONTENT-->

<div class="act_list_content">
  <ul class="act_list">
    <li><a href='<?php echo base_url('admin/product/add')?>'>
      <p class='icons_add_32'></p>
      Thêm mới</a></li>
    <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những sản phẩm được chọn?');">
      <p class="icons_del_32"></p>
      Xóa hết</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT--><!--END MAIN--> 

