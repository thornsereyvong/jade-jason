<?php		
	$category = get_categories(array('taxonomy'=>'categories', 'parent'=>'0'));	
	$y =0;
	foreach($category as $cat){	 $y++;
		$cat_id =  $cat->cat_ID;
		$arge = array(
				'post_type' => 'product',
				'posts_per_page' => 10,
				'tax_query' => array(
						array(
								'taxonomy' => 'categories',
								'field' => 'id',
								'terms' => array($cat_id)
						)
				),
				'meta_query'	=> array(
						'relation'		=> 'AND',
						array(
								'key'		=> 'top_product',
								'value'		=> true,
								'compare'	=> '='
						),
						array(
								'key'		=> 'active',
								'value'		=> true,
								'compare'	=> '='
						)
				)
		);
		$lastProduct = new WP_Query($arge);
		if($lastProduct->have_posts()) :	
?>
		<section class="shop-index__section">
		  <div class="container">
			<div class="row">
			  <div class="col-sm-12">
				
				<h2 class="shop-index__heading text-center">
				  Popular for <?php echo strtolower($cat->cat_name); ?> this week
				</h2>
				<p class="text-center">
				  <?php echo $cat->category_description;?>
				</p>
			  </div>
			</div>
			<div class="row">
			
			<?php						 
				while($lastProduct->have_posts()) : $lastProduct->the_post();
					get_template_part('template-parts/content', 'product');						
				endwhile;				
			?> 
			 
			</div>
		  </div>
		</section>
<?php
		endif;
		wp_reset_postdata();
	}
	
?>