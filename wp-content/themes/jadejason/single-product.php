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
<?php 
	$obj = get_queried_object();
?>
<div class="topic">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3>Product: <?php echo $obj->post_title; ?></h3>
			</div>
			<div class="col-sm-8">
				<ol class="breadcrumb pull-right hidden-xs">
					<li style="color: #2babcf;"><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li class="" style="color: #2babcf;">Product</li>
					<li class="active"><?php echo $obj->post_title; ?></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container">

	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-push-8">

			<div class="shop-item__info" data-spy="affix">
				<?php
					if(get_field('discount_price') > 0){						
						echo '<div class="shop-item-cart__price"><del style="color: gray;font-size: 20px;">$ '.number_format_i18n( get_field('price'), 2 ).'</del>';
						echo "&nbsp;";
						echo '$ '.number_format_i18n( get_field('discount_price'), 2 ).'</div>'; 
					}else{
						if(get_field('price') > 0){
							echo '<div class="shop-item-cart__price">$ '.number_format_i18n( get_field('price'), 2 ).'</div>';
						}else{
							echo '<div class="shop-item-cart__price">Ask for price</div>';
						}
					}
				?>
				<!-- Title -->
				<h3 class="shop-item-cart__title"><?php echo $obj->post_title; ?></h3>				
				<p>Post Date: <code><i>12-05-2017</i></code></p>
				<p>Reference: <code><?php echo get_field("reference"); ?></code></p>
				
				<!-- Add to cart -->
				<form class="shop-item__add">
					
					<h3 class="headline">
						<span>Colors</span>
					</h3>
					<?php 	
						$colors = get_the_terms( get_the_ID(), 'color' );
						if(count($colors)>0){
							for($i=0;$i<count($colors);$i++){
					?>
					<div class="checkbox">
			              <input name="fcolor[]" type="checkbox" value="<?php echo $colors[$i]->name; ?>" id="fcolor_<?php echo $i; ?>">
			              <label for="fcolor_<?php echo $i; ?>"><?php echo $colors[$i]->name; ?></label>
			            </div>
					<?php }} ?>
					
		            <h3 class="headline">
						<span>Sizes</span>
					</h3>
					<?php 	
						$sizes = get_the_terms( get_the_ID(), 'size' );
						if(count($sizes)>0){
							$curSize = $sizes[0]->name;
							for($i=0;$i<count($sizes);$i++){
					?>
						<div class="checkbox">
			              <input name="fsize[]" type="checkbox" value="<?php echo $sizes[$i]->name; ?>" id="fsize_<?php echo $i; ?>">
			              <label for="fsize_<?php echo $i; ?>"><?php echo '['.$sizes[$i]->name.'] '.$sizes[$i]->description; ?></label>
			            </div>
					<?php }} ?>
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
					
					<?php				
						if ( has_post_thumbnail() ) {
							echo '<img id="bigpic" src="'.get_the_post_thumbnail_url().'" class="active img-responsive" title="..." alt="..." />';											
						}else{
							echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ). '/images/no-image.jpg" />';
						}
						
						if(have_rows('images')):
							while ( have_rows('images') ) : the_row();
								$img = get_sub_field('image');
								echo '<img class="img-responsive" id="" src="'.$img.'" alt="" title=""  />';								
							endwhile;
						endif;
					?>
				</div>
				<div class="shop-item-img__main">					
					<?php				
						if ( has_post_thumbnail() ) {
							echo '<img id="bigpic" src="'.get_the_post_thumbnail_url().'" class="img-responsive" title="..." alt="..." />';											
						}else{
							echo '<img class="img-responsive" src="' . get_bloginfo( 'stylesheet_directory' ). '/images/no-image.jpg" />';
						}					
					?>
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
					<?php 
						if($obj->post_content != ""){
							echo $obj->post_content; 
						} 
					?>
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
						
						<?php
							$cats = get_the_terms( get_the_ID(), 'products' );
							$cs = array();
							foreach ($cats as $c){
								$cs[] = $c->term_id;
							}
							$arge = array(
									'post_type' => 'product',
									'posts_per_page' => 6,
									'tax_query' => array(
											array(
													'taxonomy' => 'products',
													'field' => 'id',
													'terms' => $cs
											)
									),
									'meta_query'	=> array(
											'relation'		=> 'AND',											
											array(
													'key'		=> 'active',
													'value'		=> true,
													'compare'	=> '='
											)
									)
							);
							$lastProduct = new WP_Query($arge);
							if($lastProduct->have_posts()) :						 
								while($lastProduct->have_posts()) : $lastProduct->the_post();
									get_template_part('template-parts/content', 'product');						
								endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_sidebar ();
get_footer ();
