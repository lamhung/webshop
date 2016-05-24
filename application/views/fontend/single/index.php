<!--flex slider-->
<script defer src="<?php echo base_url('template/fontend/js/jquery.flexslider.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('template/fontend/css/flexslider1.css');?>" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="<?php echo base_url('template/fontend/js/imagezoom.js');?>"></script>


<!--breadcrumbs-->

<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Single page</li>
    </ol>
  </div>
</div>
<!--//breadcrumbs--> 
<!--single-page-->
<div class="single">
  <div class="container">
    <div class="single-info">
      <div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">
        <div class="flexslider">
          <ul class="slides">
          <?php
		  	foreach($product_images as $product_image)
			{
		  ?>
            <li data-thumb="<?php echo base_url('upload/product/slider/'.$product_image['file_name']);?>">
           
              <div class="thumb-image"> <img src="<?php echo base_url('upload/product/slider/'.$product_image['file_name']);?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
            </li>
          <?php
			}
		   ?>
          </ul>
        </div>
      </div>
      <div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
        <h3><?php echo $product['name']?></h3>
        <div class="single-rating"> <span class="starRating">
          <input id="rating5" type="radio" name="rating" value="5" checked>
          <label for="rating5">5</label>
          <input id="rating4" type="radio" name="rating" value="4">
          <label for="rating4">4</label>
          <input id="rating3" type="radio" name="rating" value="3">
          <label for="rating3">3</label>
          <input id="rating2" type="radio" name="rating" value="2">
          <label for="rating2">2</label>
          <input id="rating1" type="radio" name="rating" value="1">
          <label for="rating1">1</label>
          </span>
          <p>5.00 out of 5</p>
          <a href="#">Add Your Review</a> </div>
        <h6 class="item_price"><?php echo number_format($product['price'],0);?> VNĐ</h6>
        <p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes</p>
        <ul class="size">
          <h4>Size</h4>
          <li><a href="#">6-12 M</a></li>
          <li><a href="#">1-2 Y</a></li>
          <li><a href="#">2-3 Y</a></li>
          <li><a href="#">3-4 Y</a></li>
        </ul>
        <ul class="color">
          <h4>Color</h4>
          <li><a href="#"></a></li>
          <li><a href="#" class="red"></a></li>
          <li><a href="#" class="green"></a></li>
          <li><a href="#" class="pink"></a></li>
        </ul>
        <div class="clearfix"> </div>
        <div class="quantity">
          <p class="qty"> Qty : </p>
          <input min="1" type="number" value="1" class="item_quantity">
        </div>
        <div class="btn_form"> <a href="#" class="add-cart item_add">ADD TO CART</a> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!--collapse-tabs-->
    <div class="collpse tabs">
      <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Description </a> </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body"><?php echo $product['description'];?></div>
          </div>
        </div>
        <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".6s">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> additional information </a> </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body"><?php echo $product['detail']?></div>
          </div>
        </div>
        <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".7s">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> reviews (5) </a> </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
          </div>
        </div>
        <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".8s">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> help </a> </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
          </div>
        </div>
      </div>
    </div>
    <!--//collapse --> 
    <!--related-products-->
    <div class="related-products">
      <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
        <h3 class="title">Related<span> Products</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
      </div>
      <div class="related-products-info">
        <?php
		foreach($product_relates as $product_relate)
		{
		?>
        <div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
          <div class="new-top"> <a href="single.html"><img src="<?php echo base_url('upload/product/'.$product_relate['raw_name'].'_thumb'.$product_relate['file_ext']);?>" class="img-responsive" alt=""/></a>
            <div class="new-text">
              <ul>
                <li><a class="item_add" href=""> Add to cart</a></li>
                <li><a href="single.html">Quick View </a></li>
                <li><a href="products.html">Show Details </a></li>
              </ul>
            </div>
          </div>
          <div class="new-bottom">
            <h5><a class="name" href="<?php echo base_url('product/'.$product_relate['url'].'-'.$product_relate['id']);?>"><?php echo $product_relate['name'];?></a></h5>
            <div class="rating"> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span>☆</span> </div>
            <div class="ofr">
             
              <p><span class="item_price"><?php echo $product_relate['price'];?></span></p>
            </div>
          </div>
        </div>
		<?php
		}
		?>
        <div class="clearfix"> </div>
      </div>
    </div>
    <!--//related-products--> 
  </div>
</div>
<!--//single-page--> 
