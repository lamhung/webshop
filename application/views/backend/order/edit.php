<div class="main">
<div class="wap_main">
<div class="act_list_content">
  <!-- BUTTON ACT LIST -->
  
  <ul class="act_list">
    <li><a href='http://webshop.local:8080/admin/order'>
      <p class="icons_list_32"></p>
      Danh sách</a></li>
    <li><a href=javascript:submitFormID('fm_order')>
      <p class="icons_save_32"></p>
      Lưu</a></li>
  </ul>
  <!--END ACT LIST--> 
  
</div>
<!--END ACT LIST CONTENT-->

<div class="main_content">
  <div class="pages">
    <h1 class="title_main"><span class="icons_list_32"></span>Sửa Giỏ Hàng</h1>
    <div class="pagenav" style="margin-top:15px;"> </div>
    <!--END PAGE NAV--> 
    
  </div>
  <!--END PAGES--> 
  
  <?php $this->load->view('backend/order/_form');?>
  
  <div class="pages">
    <div class="pagenav"> </div>
    <!--END PAGE NAV--> 
    
  </div>
  <!--END PAGES--> 
  
</div>
<!--END MAIN CONTENT--> 
</div>
    