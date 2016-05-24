<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
      
      <?php $this->load->view('backend/user/_search');?>
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/user/add');?>'>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những thành viên được chọn?');">
          <p class="icons_del_32"></p>
          Xóa hết</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span>thành viên</h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      
      <form name="fm_list" id="fm_list" method="post" action="http://thinhphat.local:8080/acp/user/delete_all">
        <table cellpadding="0" cellspacing="0" border="0" class="tbl_list">
          <tr>
            <th width=""><input type="checkbox" class="check-all" /></th>
            <th width="2%">STT</th>
            
            <th width="">Tên hiển thị</th>
            <th width="">Tên đăng nhập</th>
            <th width="">Điện thoại</th>
            <th width="">Email</th>
            <th width="">Sửa</th>
            <th width="">Xóa</th>
          </tr>
          <?php
		  	foreach($users as $key => $user)
			{
		  ?>
          <tr>
            <td width=""><input type="checkbox" name="list_id[]" value="20"/></td>
            <td><?php echo $key+1; ?></td>
       
            <td style="text-align:left;"><a href='<?php echo base_url('admin/user/show/'.$user['id']);?>'><?php echo $user['fullname'];?></a></td>
            <td style="text-align:left;"><?php echo $user['username'];?></td>
            <td><?php echo $user['phone'];?></td>
            <td style="text-align:left;"><?php echo $user['email'];?></td>
            <td><a href="<?php echo base_url('admin/user/edit/'.$user['id']);?>" class="icons_edit_16"></a></td>
            <td><a href="<?php echo base_url('admin/user/delete/'.$user['id']);?>" onclick="return confirm('Bạn muốn xóa thành viên này');" class="icons_del_16"></a></td>
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
        <li><a href=''>
          <p class='icons_add_32'></p>
          Thêm mới</a></li>
        <li><a href=javascript:submitFormID('fm_list') onclick="return confirm('Xóa những thành viên được chọn?');">
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