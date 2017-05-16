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
			<form class="shop__filter">
				<h3 class="headline">
					<span>Price</span>
				</h3>
				<div class="radio">
					<input type="radio" name="shop-filter__price"
						id="shop-filter-price_1" value="" checked> <label
						for="shop-filter-price_1">Under $25</label>
				</div>
				<div class="radio">
					<input type="radio" name="shop-filter__price"
						id="shop-filter-price_2" value=""> <label
						for="shop-filter-price_2">$25 to $50</label>
				</div>
				<div class="radio">
					<input type="radio" name="shop-filter__price"
						id="shop-filter-price_3" value=""> <label
						for="shop-filter-price_3">$50 to $100</label>
				</div>
				<div class="radio">
					<input type="radio" name="shop-filter__price"
						id="shop-filter-price_4" value="specify"> <label
						for="shop-filter-price_4">Other (specify)</label>
				</div>
				<div class="form-group shop-filter__price">
					<div class="row">
						<div class="col-xs-4">
							<label for="shop-filter-price_from" class="sr-only"></label> <input
								id="shop-filter-price_from" type="number" min="0"
								class="form-control" placeholder="From" disabled>
						</div>
						<div class="col-xs-4">
							<label for="shop-filter-price_to" class="sr-only"></label> <input
								id="shop-filter-price_to" type="number" min="0"
								class="form-control" placeholder="To" disabled>
						</div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-block btn-default" disabled>Go</button>
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
					<input type="checkbox" value="<?php echo $s->name; ?>" id="<?php echo $s->name.'-'.$index_size;?>">
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
					<input  type="checkbox" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_color;?>">					
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
					<input  type="checkbox" value="<?php echo $c->name; ?>" id="<?php echo $c->name.'-'.$index_brand;?>">					
					<label for="<?php echo $c->name.'-'.$index_brand; ?>"><?php echo ' '.$c->name; ?></label>					
				</div>				
				<?php } ?>
			</form>
		</div>
		
		<div class="col-sm-8 col-md-9">
			<!-- Filters -->
			<ul class="shop__sorting">
			<li class="active"><a href="#">Popular</a></li>
            <li><a href="#">Newest</a></li>
            <li><a href="#">Bestselling</a></li>
            <li><a href="#">Price (low)</a></li>
            <li><a href="#">Price (high)</a></li>
				<?php 
					/* $status = get_field_object('status');
					if( $status ): 
						$i=0;
						foreach ($status['choices'] as $s){
							if($i==0)
								echo '<li class="active"><a href="#">'.$s.'</a></li>';
							else
								echo '<li><a href="#">'.$s.'</a></li>';
							$i++;
						}
					endif;  */
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
			<!-- / .row -->
	
		</div>
		<!-- / .col-sm-8 -->
	</div>
	<!-- / .row -->
</div>