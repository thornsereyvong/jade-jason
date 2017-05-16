<!-- SLIDESHOW ================================================== -->
<div class="shop__slideshow">
	<div id="shop__slideshow" class="carousel carousel-fade slide"
		data-ride="carousel">
		<div class="carousel-inner" role="listbox">			
			<!-- start slide show -->
			<?php 
				$args = array( 'post_type' => 'slideshow', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				$index_slideshow=0;
				while ( $loop->have_posts() ) : $loop->the_post();
			?>			
			<div class="item <?php if($index_slideshow==0){echo 'active';} ?>" style="background: url(<?php the_field('image'); ?>) no-repeat center center / cover;">
				<div class="item__container">
					<div class="item-container__inner">
						<div class="container">
							<div class="row">
								<div class="col-sm-8 col-md-6 col-lg-5">
									<h1 class="shop-slideshow__heading">
										<?php the_title(); ?>
									</h1>
									<p class="shop-slideshow__subheading">
										<?php the_field('decription'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
					$index_slideshow++;
				endwhile;
				wp_reset_postdata();
			?>
			<!-- End slide show -->
		</div>
		<!-- Controls -->
		<a href="#shop__slideshow" class="shop-slideshow__control"
			role="button" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_left.svg"
			alt="Prev">
		</a> <a href="#shop__slideshow" class="shop-slideshow__control"
			role="button" data-slide="next"> <img
			src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right.svg" alt="Next">
		</a>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php for($i=0;$i<$index_slideshow;$i++){ ?>
				<li data-target="#shop__slideshow" data-slide-to="<?php echo $i; ?>" <?php if($i==0){echo 'class=\'active]\'';} ?>"></li>
			<?php } ?>			
		</ol>
	</div>
</div>