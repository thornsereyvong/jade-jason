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
 * @package jadejason
 */

get_header(); 

?>
<?php require get_template_directory() . '/template-parts/content-slideshow.php'; ?>
<?php require get_template_directory() . '/template-parts/content-type.php'; ?>
<?php require get_template_directory() . '/template-parts/content-top-products.php'; ?>
<?php
get_footer();
