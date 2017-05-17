<?php 
	$obj = get_queried_object();
?>

	

<!-- TOPIC HEADER
    ================================================== -->
    <div class="topic">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3>Category: <?php echo $obj->name; ?></h3>
          </div>
          <div class="col-sm-8">
            <ol class="breadcrumb pull-right hidden-xs">
              <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
              <li class="" style="color: #2babcf;">Category</li>
              <li class="active"><?php echo $obj->name; ?></li>
            </ol>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .topic -->
<!-- MAIN CONTENT
    ================================================== -->
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-3">
			<form id="frmSearhPro" class="shop__filter">
				<h3 class="headline">
					<span>Price</span>
				</h3>
				<div class="radio">
					<input type="radio" name="fPrice" id="fprice_1" value="under25" checked> 
					<label for="fprice_1">Under $25</label>
				</div>
				<div class="radio">
					<input type="radio" name="fPrice" id="fprice_2" value="25To50"> 
					<label for="fprice_2">$25 to $50</label>
				</div>
				<div class="radio">
					<input type="radio" name="fPrice" id="fprice_3" value="50To100"> 
					<label for="fprice_3">$50 to $100</label>
				</div>
				<div class="radio">
					<input type="radio" name="fPrice" id="fprice_4" value="specify"> 
					<label for="fprice_4">Other (specify)</label>
				</div>
				<div class="form-group shop-filter__price">
					<div class="row">
						<div class="col-xs-4">
							<label for="shop-filter-price_from" class="sr-only"></label> 
							<input id="priceFrom" type="number" min="0" class="form-control" placeholder="From" disabled>
						</div>
						<div class="col-xs-4">
							<label for="shop-filter-price_to" class="sr-only"></label> 
							<input id="priceTo" type="number" min="0" class="form-control" placeholder="To" disabled>
						</div>
					</div>
				</div>
				
				
				<h3 class="headline">
					<span>Sizes</span>
				</h3>
				<?php 
					$size_pro = get_terms(array('taxonomy'=>'size', 'hide_empty' => false));
					$index_size = 0;
					foreach($size_pro as $s){ $index_size++;
				?>
				<div class="checkbox">
					<input type="checkbox" name="fSize[]" value="<?php echo $s->name; ?>" id="<?php echo $s->name.'-'.$index_size;?>">
					<label for="<?php echo $s->name.'-'.$index_size; ?>"><?php echo '['.$s->name.'] '.$s->description; ?></label>
				</div>
				<?php } ?>
				
				
				<h3 class="headline">
					<span>Colors</span>
				</h3>
				<?php 
					$color_pro = get_terms(array('taxonomy'=>'color', 'hide_empty' => false));
					$index_color = 0;
					foreach($color_pro as $c){ $index_color++;
				?>				
				<div class="checkbox">
					<input  type="checkbox" name="fcolor[]" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_color;?>">					
					<label for="<?php echo $c->name.'-'.$index_color; ?>"><?php echo ' '.$c->name; ?></label>					
				</div>				
				<?php } ?>
				
				
				<h3 class="headline">
					<span>Brand</span>
				</h3>
				<?php 
					$brand_pro = get_terms(array('taxonomy'=>'brand', 'hide_empty' => false));
					$index_brand = 0;
					foreach($brand_pro as $c){ $index_brand++;
				?>				
				<div class="checkbox">
					<input  type="checkbox" name="fbrand[]" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_brand;?>">					
					<label for="<?php echo $c->name.'-'.$index_brand; ?>"><?php echo ' '.$c->name; ?></label>					
				</div>				
				<?php } ?>
				<br>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12  text-center">
							<button type="button" id="btnSearchPro" class="btn btn-block btn-primary">Search</button>
						</div>
					</div>
				</div>
				
			</form>
		</div>
		
		<div class="col-sm-8 col-md-9">
			<!-- Filters -->
			<ul class="shop__sorting" id="typeProductclk">
				<?php 
					$status = get_field_object('status');
					$status_val = $_GET['tab'];
					if( $status ): 
						foreach ($status['choices'] as $k => $s){
							if($status_val==$k)
								echo '<li data-val="'.$k.'" class="active"><a href="#">'.$s.'</a></li>';
							else
								echo '<li data-val="'.$k.'"><a href="#">'.$s.'</a></li>';							
						}
					endif;
				?>
			</ul>
	
			<div class="row">
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_1.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">
								<span class="shop-thumb-price_old">$80.99</span> <span
									class="shop-thumb-price_new">$59.99</span>
							</div>
	
						</a>
					</div>
	
				</div>
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_2.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">$59.99</div>
	
						</a>
					</div>
	
				</div>
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_3.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">$59.99</div>
	
						</a>
					</div>
	
				</div>
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_4.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">$59.99</div>
	
						</a>
					</div>
	
				</div>
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_5.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">$59.99</div>
	
						</a>
					</div>
	
				</div>
				<div class="col-sm-6 col-md-4">
	
					<div class="shop__thumb">
						<a href="#">
	
							<div class="shop-thumb__img">
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_6.jpg" class="img-responsive"
									alt="...">
							</div>
	
							<h5 class="shop-thumb__title">Product Title</h5>
	
							<div class="shop-thumb__price">$59.99</div>
	
						</a>
					</div>
	
				</div>
			</div>
			<!-- / .row -->
	
			<!-- Pagination -->
			<div class="row">
				<div class="col-sm-12">
	
					<ul class="pagination pull-right">
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
	
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function aliasString(str){
		str = str.replace("(", "");
		str = str.replace(")", "");
		str = str.replace("  ", "");
		str = str.replace(" ", "-");
		return str;
	}
	function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
	function updateQueryStringParameter(key, value) {
		var uri = window.location.href;
	  	var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
	  	var separator = uri.indexOf('?') !== -1 ? "&" : "?";
	  	if (uri.match(re)) {
	    	return uri.replace(re, '$1' + key + "=" + value + '$2');
	  	}else {
	    	return uri + separator + key + "=" + value;
	  	}
	}
	$(function(){
		$("#typeProductclk li").click(function(){
			var type = $(this).attr("data-val");
			var url = updateQueryStringParameter('tab', type);
			window.location.href = url;
		});

		$("#btnSearchPro").click(function(){
			var price = $('input[name=fPrice]:checked', '#frmSearhPro').val();
			if(price == "specify"){
				var fp = Number($.trim($("#priceFrom").val()));
				var tp = Number($.trim($("#priceTo").val()));
				price = "&fromprice="+fp+"&toprice="+tp;
			}else if(price == "under25"){
				price = "&fromprice=0&toprice=25";
			}else if(price == "25To50"){
				price = "&fromprice=25&toprice=50";
			}else if(price == "50To100"){
				price = "&fromprice=50&toprice=100";
			}else{
				price = "&fromprice=all&toprice=all";
			}
			
			var size = "";
			var i=0;
		 	$("input[name='fSize[]']:checked").each( function () {i++;
				size += "&fsize"+i+"="+$(this).val();
		 	});

			var color = "";
			i=0;
		 	$("input[name='fcolor[]']:checked").each( function () {i++;
		 		color += "&fcolor"+i+"="+$(this).val();
		 	});

		 	var brand = "";
			i=0;
		 	$("input[name='fbrand[]']:checked").each( function () {i++;
		 		brand += "&fbrand"+i+"="+$(this).val();
		 	});
		});

		$('input[name=fPrice]').change(function(){
			var price = $('input[name=fPrice]:checked', '#frmSearhPro').val();
			if(price == 'specify'){
				$("#priceFrom").prop('disabled', false);
				$("#priceTo").prop('disabled', false);
			}else{
				$("#priceFrom").prop('disabled', true);
				$("#priceTo").prop('disabled', true);
				$("#priceFrom").val('');
				$("#priceTo").val('');
			}
		});
		
	});
</script>

