<div class="col-sm-4">
	<div class="shop__thumb">
		<a href="<?php echo get_permalink(); ?>">
			<div class="shop-thumb__img">
				<?php if ( has_post_thumbnail() ) { ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="...">
				<?php }else{ ?>
				<img src="<?php echo get_bloginfo( 'stylesheet_directory' ). '/images/no-image.jpg'; ?>" />
				<?php } ?>
			</div>

			<h5 class="shop-thumb__title"><?php the_title(); ?></h5>

			<div class="shop-thumb__price">
				<?php
					if(get_field('discount_price') > 0){						
						echo '<span class="shop-thumb-price_old">$ '.number_format_i18n( get_field('price'), 2 ).'</span>';
						echo "&nbsp;";
						echo '<span class="shop-thumb-price_new">$ '.number_format_i18n( get_field('discount_price'), 2 ).'</span>'; 
					}else{
						if(get_field('price') > 0){
							echo '<span class="shop-thumb-price_new">$ '.number_format_i18n( get_field('price'), 2 ).'</span>';
						}else{
							echo '<span class="shop-thumb-price_new">Ask for price</span>';
						}
					}
				?>				
			</div>
		</a>
	</div>
</div>