<?php

/**
 * Pagination
 */
 
function zobenz_group_001_pagination() {
	
	global $wp_query;
	
	$args = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text' 	=> '«',
		'next_text' 	=> '»',
		'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
	);
	
	echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', paginate_links( $args ) );
	
}