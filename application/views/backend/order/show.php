
<div class="main">
<div class="main">
  <div class="wap_main">
    <div class="act_list_content">
      <ul class="ajax_list">
        <li class="search_bar">
          <form name="fr_search" method="post" action="http://webshop.local:8080/admin/user/search">
            <input type="text" name="keyword" class="txtsearch" onclick="this.value = ''" value="" />
            <input type="submit" name="btn_search" class="btn_search_bar" value="" />
            <input type="hidden" name="searchSubmit" value="searchSubmit" />
          </form>
        </li>
      </ul>
      <!-- BUTTON ACT LIST -->
      
      <ul class="act_list">
        <li><a href='<?php echo base_url('admin/order');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/order/edit/'.$order['id']);?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/order/delete/'.$order['id']);?>' onclick="return confirm('Xóa thành viên này?');">
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
          <th>Họ Tên</th>
          <td><?php echo $order['fullname'];?></td>
        </tr>
        <tr>
          <th>Điện Thoại</th>
          <td><?php echo $order['phone'];?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo $order['address'];?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $order['email'];?></td>
        </tr>
        <tr>
          <th>Sản Phẩm</th>
          <td>
              <table width="100%"  class="order_product_list">
              
                  <tr>
                    <td>STT</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Hình Ảnh</td>
                    <td>Giá</td>
                    <td>Số Lượng</td>
                  </tr>
                <tbody id="order_product">
               <?php
			  	foreach($order_details as $key =>$order_detail)
				{
			  	?>
                <tr>
                  <td><?php echo $key+1;?></td>
                  <td><?php echo $order_detail['name'];?></td>
                  <td><img src="<?php echo  base_url('upload/product');?>/<?php echo $order_detail['image'];?>" width="100" /></td>
                  <td><?php echo $order_detail['price'];?></td>
                  <td><?php echo $order_detail['quantity'];?></td>
                 
                </tr>
              <?php
				}
			  ?>
                </tbody>
              </table>
            </td>
        </tr>
        <tr>
          <th>Ngày Giao Hàng</th>
          <td><?php echo $order['delivery_at'];?></td>
        </tr>
        <tr>
          <th>Trạng Thái</th>
          <td><?php if($order['status'] == 0){echo 'Mới';} else if($order['status'] == 1){echo 'Đang xử lí';} else if($order['status'] == 2){echo 'Đã xử lí';} 
		else if($order['status'] == 3)
		{echo 'Hủy bỏ';}?></td>
        </tr>
        <tr>
          <th>Chú ý</th>
          <td><?php echo $order['note'];?></td>
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
        <li><a href='<?php echo base_url('admin/order');?>'>
          <p class="icons_list_32"></p>
          Danh sách</a></li>
        <li><a href='<?php echo base_url('admin/order/edit/'.$order['id']);?>'>
          <p class="icons_save_32"></p>
          Sửa</a></li>
        <li><a href='<?php echo base_url('admin/order/delete/'.$order['id']);?>' onclick="return confirm('Xóa thành viên này?');">
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

