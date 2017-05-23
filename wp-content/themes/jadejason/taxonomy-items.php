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
	require get_template_directory() . '/archive-products.php';
?>

<?php
get_footer ();
