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
	if(is_tax("tax_test") || is_tax("products")){
		require get_template_directory() . '/archive-products.php';
	}else{
		echo "ddd";
	}
?>

<?php
get_footer ();
