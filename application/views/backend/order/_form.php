<script type="text/javascript" src="http://webshop.local/template/common/datepicker/js/datepicker.js"></script>

<form name="fm_order" id="fm_order" method="post" enctype="multipart/form-data" >
  <table cellpadding="0" cellspacing="0" border="0" class="tbl_act">
    <tr>
      <th>Họ Tên<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="fullname" value="<?php echo set_value('fullname',$order['fullname']);?>"  />
      	  <?php echo form_error('fullname','<span class="form_error">','<span>');?>
      </td>
    </tr>
    <tr>
      <th>Điện Thoại<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="phone" value="<?php echo set_value('phone',$order['phone']);?>"/>
      	 <?php echo form_error('phone','<span class="form_error">','<span>');?>
      </td>
    </tr>
    <tr>
      <th>Address<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="address" value="<?php echo set_value('address',$order['address']);?>" />
      	 <?php echo form_error('address','<span class="form_error">','<span>');?>
      </td>
    </tr>
    <tr>
      <th>Email<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="email"  value="<?php echo set_value('email',$order['email']);?>" /></td>
    </tr>
    <tr>
      <th>Sản Phẩm<span class="req_icons">(*)</span></th>
      <td>
      <div>
      		<table width="100%"  class="order_product_list">
              <tr>
                <td>STT</td>
                <td>Tên Sản Phẩm</td>
                <td>Hình Ảnh</td>
                <td>Giá</td>
                <td>Số Lượng</td>
                <td>Xóa</td>
              </tr>
              <tbody id="order_product">
              <?php
			  if(count($products))
			  {
			  	foreach($products as $key => $product)
				{
			  ?>
                 <tr>
                    <td><?php echo $key+1;?></td>
                    <td><?php echo $product['name'];?></td>
                    <td>Hình Ảnh</td>
                    <td><?php echo $product['price'];?></td>
                    <td><input name="quantity" type="number" min="1" value="<?php echo $product['quantity'];?>" style='width:30px;' onkeyup="ajax_order_quantity_update(<?php echo $product['id'];?>, this.value)" /></td>
                    <td><a href="javascript:ajax_order_remove(<?php echo $product['id'];?>)">Xóa</a></td>
              	</tr>
              <?php
				}
			  }
			  else {
			  ?>
                <tr>
                    <td colspan="6">Chưa có sản phẩm nào trong giỏ hàng!</td>
                </tr>
              <?php }?>
              </tbody>
            </table>
      </div>
            <div style="margin-bottom:20px;height:30px;">
            	<input name="order_keyword" id="order_keyword" type="text" class="txttext" placeholder="Tìm Kiếm Sản Phẩm..." 
                 onkeyup="ajax_order_search()">
                
            </div>
      <div id="order_search">
      		
     
      </div>
      </td>
    </tr>
    <tr>
      <th>Ngày Giao Hàng<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="delivery_at" value="<?php echo set_value('delivery_at',$order['delivery_at']);?>" id="datepicker" />
        (*) 
         <?php echo form_error('delivery_at','<span class="form_error">','<span>');?>
      </td>
    </tr>
    <tr>
      <th>Trạng Thái<span class="req_icons">(*)</span></th>
      <td>
      	<p>
            <input type="radio" name="status" id="status-01" value="0" checked="checked"/>
            <label for="status-01">Mới</label>
        </p>
        <p>
            <input type="radio" name="status" id="status-02" value="1"/>
            <label for="status-02">Đang Xử Lí</label>
        </p>
        <p>
            <input type="radio" name="status" id="status-03" value="2"/>
            <label for="status-03">Đã Xử Lí Thành Công</label>
        </p>
        <p>
            <input type="radio" name="status" id="status-04" value="3"/>
            <label for="status-03">Hủy Bỏ</label>
        </p>
     </td>
    </tr>
     <tr>
      <th>Chú ý<span class="req_icons">(*)</span></th>
      <td><input type="text" class="txttext" name="note"  value="" /></td>
    </tr>
  </table>
  <input type="hidden" name="submitForm" value="submitForm" />
</form>

<script>
function ajax_order_search()
{
	$.ajax({
		type : 'POST',
		url : 'http://webshop.local/admin/product/ajax_order_search',
		data: {order_keyword: $("#order_keyword").val()},
		success : function(respone){
			var data = JSON.parse(respone);
			
			$('#order_search').html(data.data);	 
		}
		
	});
}
function ajax_order_select(product_id)
{
	
	$.ajax({
		type : 'POST',
		url : 'http://webshop.local/admin/product/ajax_order_select',
		data : {product_id : product_id},
		success: function(respone){
			var data = JSON.parse(respone);	
			$('#order_product').html(data.data);
		}
		
	});
}
function ajax_order_remove(id)
{
	$.ajax({
		type :'POST',
		url : 'http://webshop.local/admin/product/ajax_order_remove',
		data : {id : id},
		success : function(respone){
			var data = JSON.parse(respone);
			//console.log(data);
			$('#order_product').html(data.data);
		}
	});
}

function ajax_order_quantity_update(id,quantity)
{
	var reg = new RegExp('^[0-9]+$');
	
	if(reg.test(quantity) == false)
	{
		alert('Vui lòng nhập số !');
		return false;
	}
	$.ajax({
		type :'POST',
		url : 'http://webshop.local/admin/product/ajax_order_quantity_update',
		data : {id : id , quantity : quantity },
		success : function(respone){
			alert('Đã cập nhật số lượng thành công!');
		}
	});
}

  $(document).ready(function(e) {
    $( "#datepicker" ).datepicker({
			dateFormat: "dd/mm/yy"
		});
	
		
  });
 </script>