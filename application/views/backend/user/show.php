<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
    <?php $this->load->view('backend/user/_search');?>
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/user');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/user/edit/'.$user['id']);?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/user/delete'.$user['id']);?>' onclick="return confirm('Xóa thành viên này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span>Thiên Hải</h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      
      <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
        <tr>
          <th>Tên hiển thị</th>
          <td><?php echo $user['fullname'];?></td>
        </tr>
        <tr>
          <th>Tên đăng nhập</th>
          <td><?php echo $user['username'];?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $user['email'];?></td>
        </tr>
        <tr>
          <th>Điện thoại</th>
          <td><?php echo $user['phone'];?></td>
        </tr>
        <tr>
          <th>Giới tính</th>
          <td><?php if($user['gender']==1) echo 'Nam';else echo 'Nữ';?></td>
        </tr>
        <tr>
          <th>Ngày sinh</th>
          <td><?php echo $user['birthday'];?></td>
        </tr> 
      </table>
      <div class="pages">
        <div class="pagenav"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES--> 
      
    </div>
    <!--END MAIN CONTENT-->
    
    <div class="act_list_content">
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/user');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/user/edit/'.$user['id']);?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/user/delete'.$user['id']);?>' onclick="return confirm('Xóa thành viên này?');">
          <p class="icons_del_32"></p>
          Xóa</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT--> 
    
  </div>
  <!--END WAP MAIN--> 
  
</div>
<!--END MAIN--> 

