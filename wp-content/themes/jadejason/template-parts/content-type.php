<!-- MAIN CONTENT================================================== -->

		<!-- Features -->
		<section class="shop-index__section">
		  <div class="container">
			<div class="row">
			  <div class="col-sm-12">
				
		<?php if(function_exists('ot_get_option') && (ot_get_option('title_pro') != '')) : ?>
		<h2 class="shop-index__heading text-center"><?php echo ot_get_option('title_pro'); ?></h2>				
		<?php
			endif;
			if(function_exists('ot_get_option') && (ot_get_option('description_pro') != '')) :												
		?>
		<p class="text-center"><?php echo ot_get_option('description_pro'); ?></p>				
		<?php endif; ?>
		
			  </div>
			</div> <!-- / .row -->
			<div class="row">
			
			  <!-- start promotion -->
			  
			  <?php 
				$args = array( 'post_type' => 'promotion', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				$index_pro=0;
				while ( $loop->have_posts() ) : $loop->the_post();
			?>	
			  
			  <div class="col-sm-4">
				
				<div class="shop-index-features__item">
				  <div class="shop-index-features__icon">
					<img alt="" src="<?php the_field('image'); ?>">
				  </div>

				  <h4 class="shop-index-features__heading">
					<?php the_title(); ?>
				  </h4>
				  <p>
					<?php the_field('description'); ?>
				  </p>
				</div>

			  </div>
			  <!-- end promotion -->
			  <?php
					$index_pro++;
					if($index_pro%3==0){ echo '<div class="clearfix"></div>';}
				endwhile;
				wp_reset_postdata();
			?>
			  
			</div>
		  </div> <!-- / .container -->
		</section>
