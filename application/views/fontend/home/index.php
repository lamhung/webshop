<link rel="stylesheet" href="<?php echo base_url('template/fontend/css/flexslider.css');?>" type="text/css" media="screen" />
<!--banner-->
<div class="banner">
  <div class="container">
    <div class="banner-text">
      <div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">
        <h2>On Entire Fashion range</h2>
        <h3>Coming Soon </h3>
        <h4>Our New Designs</h4>
        <div class="count main-row">
          <ul id="example">
            <li><span class="hours">00</span>
              <p class="hours_text">Hours</p>
            </li>
            <li><span class="minutes">00</span>
              <p class="minutes_text">Minutes</p>
            </li>
            <li><span class="seconds">00</span>
              <p class="seconds_text">Seconds</p>
            </li>
          </ul>
          <div class="clearfix"> </div>
          <script src="<?php echo base_url('template/fontend/js/jquery.countdown.min.js');?>"></script>
          
          <script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 15:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script> 
        </div>
      </div>
      <div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">
        <section class="slider grid">
          <div class="flexslider">
            <ul class="slides">
              <?php
                foreach($banners as $banner)
                {
              ?>
              <li>
                <h4>-30%</h4>
                <img src="<?php echo base_url('upload/banner/'.$banner['file_name']);?>" alt="">
              </li>
              <?php  
                }
              ?>
              
            </ul>
          </div>
        </section>
        <!--FlexSlider--> 
        <script defer src="<?php echo base_url('template/fontend/js/jquery.flexslider.js');?>"></script> 
        <script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script> 
        <!--End-slider-script--> 
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!--//banner--> 
<!--new-->
<div class="new">
  <div class="container">
    <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
      <h3 class="title">New <span>Arrivals</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
    </div>
    <div class="new-info">
      
      <?php
	  	foreach($products as $product)
		{
	  ?>
      <div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
        <div class="new-top"> <a href="single.html"><img src="<?php echo base_url('upload/product/'.$product['raw_name'].'_thumb'.$product['file_ext']);?>" class="img-responsive" alt=""/></a>
          <div class="new-text">
            <ul>
              <li><a class="item_add" href=""> Add to cart</a></li>
              <li><a href="<?php echo base_url('product/'.$product['url'].'-'.$product['id']);?>">Quick View </a></li>
              <li><a href="products.html">Show Details </a></li>
            </ul>
          </div>
        </div>
        <div class="new-bottom">
          <h5><a class="name" href="single.html"><?php  echo $product['name']; ?></a></h5>
          <div class="rating"> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span>☆</span> </div>
          <div class="ofr">
            <p><span class="item_price"><?php echo number_format($product['price'],0);?> VNĐ</span></p>
          </div>
        </div>
      </div>
      <?php
		}
	  ?>
      
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!--//new--> 
<!--gallery-->
<div class="gallery">
  <div class="container">
    <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
      <h3 class="title">Popular<span> Products</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
    </div>
    <div class="gallery-info">
    <?php
	  	foreach($products_highlight as $product_highlight)
		{
	 ?>
      	<div class="col-md-3 gallery-grid gallery-grid1 wow flipInY animated" data-wow-delay=".7s"> <a href="products.html"><img src="<?php echo base_url('upload/product/'.$product_highlight['raw_name'].'_thumb'.$product_highlight['file_ext']);?>" class="img-responsive" alt=""/></a>
        <div class="gallery-text simpleCart_shelfItem">
          <h5><a class="name" href="<?php echo base_url('product/'.$product_highlight['url'].'-'.$product_highlight['id']);?>"><?php echo $product_highlight['name']; ?></a></h5>
          <p><span class="item_price"><?php echo number_format($product_highlight['price'],0);?> VNĐ</span></p>
          <h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
          <ul>
            <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
            <li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
          </ul>
        </div>
      </div>
     <?php
		}
	 ?>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//gallery--> 
<!--trend-->
<div class="trend wow zoomIn animated" data-wow-delay=".5s">
  <div class="container">
    <div class="trend-info">
      <section class="slider grid">
        <div class="flexslider trend-slider">
          <ul class="slides">
          <?php
            foreach($banners_under as $banner_under)
            {
          ?>
            <li>
              <div class="col-md-5 trend-left"> <img src="<?php echo base_url('upload/banner/'.$banner_under['file_name']);?>" alt=""/> </div>
              <div class="col-md-7 trend-right">
                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                <h5>Flat 20% OFF</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
              </div>
              <div class="clearfix"></div>
            </li>
          <?php
            }
          ?>
          </ul>
        </div>
      </section>
    </div>
  </div>
</div>
<!--//trend--> 
