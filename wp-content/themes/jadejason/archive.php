<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jadejason
 */
get_header ();
?>

<?php 
	// check post type
	if(is_taxonomy("products")){
		require get_template_directory() . '/archive-products.php';
	}else{
		
	}
?>

<?php
get_footer ();
