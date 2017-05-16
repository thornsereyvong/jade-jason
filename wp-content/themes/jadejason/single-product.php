<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zobenz_group_001
 */
get_header ();
?>

<div class="topic">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3>Shop: Product</h3>
			</div>
			<div class="col-sm-8">
				<ol class="breadcrumb pull-right hidden-xs">
					<li><a href="index-2.html">Home</a></li>
					<li><a href="index_shop.html">Shop</a></li>
					<li class="active">Product</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container">

	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-push-8">

			<div class="shop-item__info" data-spy="affix">

				<!-- Price -->
				<div class="shop-item-cart__price">$59.99</div>

				<!-- Title -->
				<h3 class="shop-item-cart__title">Lorem ipsum dolor sit amet
					consectetur</h3>

				<!-- Intro -->
				<div class="shop-item__intro">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Quisquam minus dicta id, deleniti maiores ad nostrum sit delectus,
						expedita voluptas.</p>
				</div>

				<!-- Add to cart -->
				<form class="shop-item__add">
					<div class="input_qty">
						<input type="text" id="shop-item__qty" value="1"> <label
							for="shop-item__qty"> <span class="minus"><i class="fa fa-minus"></i></span>
							<span class="output">1</span> <span class="plus"><i
								class="fa fa-plus"></i></span>
						</label>
					</div>
					<button type="submit" class="btn btn-block btn-secondary">
						<i class="fa fa-shopping-cart"></i> Add to cart
					</button>
				</form>

			</div>
			<!-- / .shop-item__info -->

		</div>
		<div class="col-xs-12 col-md-8 col-md-pull-4">

			<!-- Product image -->
			<div class="shop-item__img">
				<div class="shop-item-img__aside">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_1.jpg" class="active img-responsive"
						alt="..."> <img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_2.jpg"
						class="img-responsive" alt="..."> <img
						src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_3.jpg" class="img-responsive" alt="...">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_4.jpg" class="img-responsive"
						alt="...">
				</div>
				<div class="shop-item-img__main">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' );?>/assets/img/shop-item_1.jpg" class="img-responsive"
						alt="...">
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Item Description -->
			<div class="row">
				<div class="col-sm-12">

					<h3 class="headline">
						<span>Product Details</span>
					</h3>

					<div class="section">
						<p>Nunc in neque nec arcu vulputate ullamcorper. Ut id orci ac
							arcu consectetur fringilla. Class aptent taciti sociosqu ad
							litora torquent per conubia nostra, per inceptos himenaeos. Duis
							hendrerit enim id arcu lacinia, id commodo ante semper. Sed vel
							ante nec nisi vestibulum congue. Pellentesque non lacus in tortor
							rutrum tristique.</p>
						<p>In bibendum nibh tempus volutpat efficitur. Sed dignissim
							ligula leo, eget porta urna commodo sed. Sed dictum quis lectus
							sit amet iaculis. Proin imperdiet mi justo. Class aptent taciti
							sociosqu ad litora torquent per conubia nostra, per inceptos
							himenaeos. Phasellus hendrerit quam non lacus gravida maximus.
							Vivamus hendrerit lorem ac tincidunt maximus.</p>
					</div>

				</div>
			</div>
			<!-- / .row -->

			<!-- Similar products -->
			<div class="row">
				<div class="col-sm-12">

					<h3 class="headline">
						<span>Similar Products</span>
					</h3>

					<div class="row">
						<div class="col-sm-4">

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
						<div class="col-sm-4">

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
						<div class="col-sm-4">

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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_sidebar ();
get_footer ();
