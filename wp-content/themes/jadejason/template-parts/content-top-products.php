<!-- Featured collection -->

<?php 
	$type_cat = array("man", "women",kids);
	foreach ($type_cat as $t){
?>

		<section class="shop-index__section">
		  <div class="container">
			<div class="row">
			  <div class="col-sm-12">
				
				<h2 class="shop-index__heading text-center">
				  Popular for <?php echo $t; ?> this week
				</h2>

			  </div>
			</div> <!-- / .row -->
			<div class="row">
			  <div class="col-sm-3">

				<div class="shop__thumb">
				  <a href="#">

					<div class="shop-thumb__img">
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-item_1.jpg" class="img-responsive" alt="...">
					</div>

					<h5 class="shop-thumb__title">
					  Product Title
					</h5>

					<div class="shop-thumb__price">
					  <span class="shop-thumb-price_old">$80.99</span>
					  <span class="shop-thumb-price_new">$59.99</span>
					</div>

				  </a>
				</div>

			  </div>
			  <div class="col-sm-3">

				<div class="shop__thumb">
				  <a href="#">

					<div class="shop-thumb__img">
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-item_2.jpg" class="img-responsive" alt="...">
					</div>

					<h5 class="shop-thumb__title">
					  Product Title
					</h5>

					<div class="shop-thumb__price">
					  $59.99
					</div>

				  </a>
				</div>

			  </div>
			  <div class="col-sm-3">

				<div class="shop__thumb">
				  <a href="#">

					<div class="shop-thumb__img">
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-item_3.jpg" class="img-responsive" alt="...">
					</div>

					<h5 class="shop-thumb__title">
					  Product Title
					</h5>

					<div class="shop-thumb__price">
					  $59.99
					</div>

				  </a>
				</div>

			  </div>
			  <div class="col-sm-3">

				<div class="shop__thumb">
				  <a href="#">

					<div class="shop-thumb__img">
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-item_4.jpg" class="img-responsive" alt="...">
					</div>

					<h5 class="shop-thumb__title">
					  Product Title
					</h5>

					<div class="shop-thumb__price">
					  $59.99
					</div>

				  </a>
				</div>

			  </div>
			</div> <!-- / .row -->
		  </div> <!-- / .container -->
		</section>
<?php } ?>