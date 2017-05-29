<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jadejason
 */
	get_header ();
	
	
	$obj = get_queried_object();
	
	$size_search = array();
	if(isset($_GET['fsize'])){
		$size_search = $_GET['fsize'];
	}
	$color_search = array();
	if(isset($_GET['fcolor'])){
		$color_search = $_GET['fcolor'];
	}
	$pt = "fprice_1";
	if(isset($_GET['pt'])){
		$pt = $_GET['pt'];
	}
	$ptf = 0;
	$ptt = 1000000;
	if(isset($_GET['fromprice']) && isset($_GET['toprice'])){
		$ptf = $_GET['fromprice'];
		$ptt = $_GET['toprice'];
	}
	
	$brand_search = array();
	if(isset($_GET['fbrand'])){
		$brand_search = $_GET['fbrand'];
	}
	
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
					<input <?php if($pt=="fprice_1"){ echo 'checked'; }?> type="radio" name="fPrice" id="fprice_1" value="under25" checked> 
					<label for="fprice_1">Under $25</label>
				</div>
				<div class="radio">
					<input <?php if($pt=="fprice_2"){ echo 'checked'; }?> type="radio" name="fPrice" id="fprice_2" value="25To50"> 
					<label for="fprice_2">$25 to $50</label>
				</div>
				<div class="radio">
					<input <?php if($pt=="fprice_3"){ echo 'checked'; }?> type="radio" name="fPrice" id="fprice_3" value="50To100"> 
					<label for="fprice_3">$50 to $100</label>
				</div>
				<div class="radio">
					<input <?php if($pt=="fprice_4"){ echo 'checked'; }?> type="radio" name="fPrice" id="fprice_4" value="specify"> 
					<label for="fprice_4">Other (specify)</label>
				</div>
				<div class="form-group shop-filter__price">
					<div class="row">
						<div class="col-xs-4">
							<label for="shop-filter-price_from" class="sr-only"></label> 
							<input value="<?php if($pt=="fprice_4"){ echo $ptf; }?>" id="priceFrom" type="number" min="0" class="form-control" placeholder="From" <?php if($pt != "fprice_4"){ echo 'disabled'; }?>>
						</div>
						<div class="col-xs-4">
							<label for="shop-filter-price_to" class="sr-only"></label> 
							<input value="<?php if($pt=="fprice_4"){ echo $ptt; }?>" id="priceTo" type="number" min="0" class="form-control" placeholder="To" <?php if($pt != "fprice_4"){ echo 'disabled'; }?>>
						</div>
					</div>
				</div>
				
				
				<h3 class="headline">
					<span>Sizes</span>
				</h3>
				<?php 
					$size_pro = get_terms(array('taxonomy'=>'size', 'hide_empty' => false));
					$index_size = 0;
					$size_select = "";
					foreach($size_pro as $s){ $index_size++;
						$size_select = "";
						if(in_array($s->name, $size_search)){
							$size_select = "checked";
						}
				?>
				<div class="checkbox">
					<input type="checkbox" <?php echo $size_select; ?> name="fSize[]" value="<?php echo $s->name; ?>" id="<?php echo $s->name.'-'.$index_size;?>">
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
						$color_select = "";
						if(in_array($c->name, $color_search)){
							$color_select = "checked";
						}
				?>				
				<div class="checkbox">
					<input  type="checkbox" <?php echo $color_select; ?> name="fcolor[]" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_color;?>">					
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
						$brand_select = "";
						if(in_array($c->name, $brand_search)){
							$brand_select = "checked";
						}
				?>				
				<div class="checkbox">
					<input  type="checkbox" <?php echo $brand_select; ?> name="fbrand[]" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_brand;?>">					
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
				
					$status = array('all'=>'All', 'popular'=>'Popular','newest'=>'Newest','bestselling'=>'Bestselling','price-low'=>'Price (Low)','price-hight'=>'Price (Hight)');					
					$status_val = $_GET['tab'];
					if($status_val == ""){
						$status_val = "all";
					}
					
					if( $status ): 
						foreach ($status as $k => $s){
							if($status_val==$k)
								echo '<li data-val="'.$k.'" class="active"><a href="#">'.$s.'</a></li>';
							else
								echo '<li data-val="'.$k.'"><a href="#">'.$s.'</a></li>';							
						}
					endif;
				?>
			</ul>
	
			<div class="row">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$post_per_page = 16;
					
					$tax_arr = array(array(
										'taxonomy' => 'categories',
										'field' => 'slug',
										'terms' => array($obj->slug)
									)
							
					);
					if(count($size_search)>0){						
						$tax_arr[] = array(
										'taxonomy' => 'size',
										'field' => 'name',
										'terms' => $size_search
									);
					}
					if(count($brand_search)>0){
						$tax_arr[] = array(
								'taxonomy' => 'brand',
								'field' => 'name',
								'terms' => $brand_search
						);
					}
					if(count($color_search)>0){
						$tax_arr[] = array(
								'taxonomy' => 'color',
								'field' => 'name',
								'terms' => $color_search
						);
					}
					/* ,
					array('key' => 'price',
							'value' => array($ptf, $ptt),
							'compare' => 'BETWEEN'
					) */
					$args=array(
								'post_type' => 'product',
								'posts_per_page' => $post_per_page,
								'paged' => $paged,
								'tax_query' => $tax_arr,
								'meta_query'	=> array(
										'relation'		=> 'AND',
										array('key'		=> 'active',
											  'value'		=> true,
											  'compare'	=> '='
										),
										array('key' => 'status',
												'value' => $status_val,
												'compare' => 'LIKE'
										)
								)
					);
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query($args);
					if( have_posts() ) :
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
						get_template_part('template-parts/content', 'product-4');
					endwhile; 
				?>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>				
				<?php endif; 
				?>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class='ipagination pull-right'>
							<?php 
								echo paginate_links(array(
									'total' => $wp_query->max_num_pages
								));
							?>
						</div>
					</div>
				</div>
				<?php
					$wp_query = $temp; //reset back to original query
				?>
		</div>
	</div>
</div>

<script type="text/javascript">
    var tab = "?tab=<?php echo $status_val; ?>";
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
			var uri = window.location.href;
			uri = uri.split("?");
			uri = uri[0]+""+tab;
			
			var price = $('input[name=fPrice]:checked', '#frmSearhPro').val();
			var price_t = "fprice_1";
			if(price == "specify"){
				price_t = "fprice_4";
				var fp = Number($.trim($("#priceFrom").val()));
				var tp = Number($.trim($("#priceTo").val()));
				price = "&fromprice="+fp+"&toprice="+tp;
			}else if(price == "under25"){
				price_t = "fprice_1";
				price = "&fromprice=0&toprice=25";
			}else if(price == "25To50"){
				price_t = "fprice_2";
				price = "&fromprice=25&toprice=50";
			}else if(price == "50To100"){
				price_t = "fprice_3";
				price = "&fromprice=50&toprice=100";
			}else{
				price_t = "fprice_5";
				price = "&fromprice=all&toprice=all";
			}
			
			var size = "";
			var i=0;
		 	$("input[name='fSize[]']:checked").each( function () {i++;
				size += "&fsize%5B%5D="+$(this).val();
		 	});

			var color = "";
			i=0;
		 	$("input[name='fcolor[]']:checked").each( function () {i++;
		 		color += "&fcolor%5B%5D="+$(this).val();
		 	});

		 	var brand = "";
			i=0;
		 	$("input[name='fbrand[]']:checked").each( function () {i++;
		 		brand += "&fbrand%5B%5D="+$(this).val();
		 	});

			uri = uri+"&pt="+price_t+""+price+""+color+""+size+""+brand;

			window.location.href = uri;
					 	
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
<?php
get_footer ();
