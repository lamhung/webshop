<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/fontend/css/jquery-ui.css');?>">

<!--breadcrumbs-->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Products</li>
    </ol>
  </div>
</div>
<!--//breadcrumbs--> 
<!--products-->
<div class="products">
  <div class="container">
    <div class="col-md-9 product-model-sec">
  
  <?php
  	foreach($products as $product)
	{
  ?>
    
      <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
        <div class="new-top"> <a href="<?php echo base_url('product/'.$product['url'].'-'.$product['id']);?>"><img src="<?php echo base_url('upload/product/'.$product['raw_name'].'_thumb'.$product['file_ext']);?>" class="img-responsive" alt=""/></a>
          <div class="new-text">
            <ul>
              <li><a href="<?php echo base_url('product/'.$product['url'].'-'.$product['id']);?>">Quick View </a></li>
              <li>
                <input type="number" class="item_quantity" min="1" value="1">
              </li>
              <li><a class="item_add" href=""> Add to cart</a></li>
            </ul>
          </div>
        </div>
        <div class="new-bottom">
          <h5><a class="name" href="single.html"><?php echo $product['name'];?></a></h5>
          <div class="rating"> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span class="on">☆</span> <span>☆</span> </div>
          <div class="ofr">
            <p class="pric1"><del>$2000.00</del></p>
            <p><span class="item_price"><?php echo $product['price'];?></span></p>
          </div>
        </div>
      </div>
	<?php
	}
	?>

    </div>
    <div class="col-md-3 rsidebar">
      <div class="rsidebar-top">
        <div class="slider-left">
          <h4>Filter By Price</h4>
          <div id="slider-range"></div>
          <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
          <!----> 
           <script type="text/javascript" src="<?php echo base_url('template/fontend/js/jquery-ui.js');?>"></script>
          <script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  	
			</script> 
          

          <!----> 
          
        </div>
        <div class="sidebar-row">
          <h4> Clothes & Shoes </h4>
          <ul class="faq">
            <li class="item1"><a href="#">Frocks & Dresses<span class="glyphicon glyphicon-menu-down"></span></a>
              <ul>
                <li class="subitem1"><a href="#">Party Wear</a></li>
                <li class="subitem1"><a href="#">Night Wear</a></li>
                <li class="subitem1"><a href="#">Bath Time</a></li>
              </ul>
            </li>
            <li class="item2"><a href="#">Shorts & Jeans<span class="glyphicon glyphicon-menu-down"></span></a>
              <ul>
                <li class="subitem1"><a href="#">Girls</a></li>
                <li class="subitem1"><a href="#">Boys</a></li>
                <li class="subitem1"><a href="#">Baby by age</a></li>
              </ul>
            </li>
            <li class="item3"><a href="#">Protection <span class="glyphicon glyphicon-menu-down"></span></a>
              <ul>
                <li class="subitem1"><a href="#">Sweaters</a></li>
                <li class="subitem1"><a href="#">Rain Jackets</a></li>
                <li class="subitem1"><a href="#">Caps & Gloves</a></li>
              </ul>
            </li>
          </ul>
          <!-- script for tabs --> 
          <script type="text/javascript">
		  	
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script> 
          <!-- script for tabs --> 
        </div>
        <div class="sidebar-row">
          <h4>DISCOUNTS</h4>
          <div class="row row1 scroll-pane">
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>

          </div>
        </div>
        <div class="sidebar-row">
          <h4>Color</h4>
          <div class="row row1 scroll-pane">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Silver</label>

          </div>
        </div>
      </div>
      <div class="gallery-grid ">
        <h6>YOU MAY ALSO LIKE</h6>
        <a href="single.html"><img src="<?php echo base_url('template/fontend/images/b1.png');?>" class="img-responsive" alt=""/></a>
        <div class="gallery-text simpleCart_shelfItem">
          <h5><a class="name" href="single.html">Full Sleeves Romper</a></h5>
          <p><span class="item_price">60$</span></p>
          <h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
          <ul>
            <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
            <li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!--//products--> 
<!-- the jScrollPane script -->
	<script type="text/javascript" src="<?php echo base_url('template/fontend/js/jquery.jscrollpane.min.js');?>"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="<?php echo base_url('template/fontend/js/jquery.mousewheel.js');?>"></script>
	<!-- the mousewheel plugin -->
	<!--search jQuery-->
