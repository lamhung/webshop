<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
    <?php $this->load->view('backend/user/_search');?>
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/user');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href=javascript:submitFormID('fm_user')>
          <p class="icons_save_32"></p>
          Lưu</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT-->
    
    <div class="main_content">
      <div class="pages">
        <h1 class="title_main"><span class="icons_list_32"></span>Thêm thành viên</h1>
        <div class="pagenav" style="margin-top:15px;"> </div>
        <!--END PAGE NAV--> 
        
      </div>
      <!--END PAGES-->
      		<?php $this->load->view('backend/user/_form');?>
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
        <li><a href=javascript:submitFormID('fm_user')>
          <p class="icons_save_32"></p>
          Lưu</a></li>
      </ul>
      <!--END ACT LIST--> 
      
    </div>
    <!--END ACT LIST CONTENT--> 
    
  </div>
  <!--END WAP MAIN--> 
  
</div>
<!--END MAIN--> 
