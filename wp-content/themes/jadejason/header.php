<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jadejason
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="assets/ico/favicon.ico">

		<title>Home | JADE JASON </title>		

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.min.js'; ?>"></script>
		<style>
			.ipagination {
			    display: inline-block;
			}
			
			.ipagination a {
			    color: black;
			    float: left;
			   	padding: 5px 12px;
			    text-decoration: none;
			    transition: background-color .3s;
			    border: 1px solid #ddd;
			}
			
			.ipagination a.current, span.current {
			    background-color: #ed3e49;
			    color: white;
			    border: 1px solid #ed3e49;
			}
			
			.ipagination a:hover:not(.current),span:hover:not(.current)  {background-color: #ddd;}
			
			
			.ipagination span {
			    color: black;
			    float: left;
			    padding: 5px 12px;
			    text-decoration: none;
			    transition: background-color .3s;
			    border: 1px solid #ddd;
			}
			.ipagination span.current {
			    background-color: #ed3e49;
			    color: white;
			    border: 1px solid #ed3e49;
			}
			.ipagination span:hover:not(.current)  {background-color: #ddd;}
		</style>
	  </head>
	<body <?php body_class(); ?>>
		<!-- NAVIGATION
		================================================== -->
		<div class="navbar navbar-default" role="navigation">
		  <div class="container">
			<div class="navbar-header">

			  <!-- Navbar toggle -->
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  
			  <!-- Navbar brand -->
			  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<i class="fa fa-paperclip"></i> JADE JASON
			  </a>

			</div> <!-- / .navbar-header -->
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav navbar-right">
			  
			  	<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'primary-nav',
							'container' => false,
							'menu_class' => 'nav navbar-nav'
						)
					);
				?>
			  
				<!-- Navbar Search -->
				<li class="hidden-xs" >
				  
				  <!-- Search toggle -->
				  <a href="#" class="navbar-search__toggle">
					<i class="fa fa-search"></i>
				  </a>

				  <!-- Search form -->
				  <div class="navbar-search">
					<form>

					  <!-- Input -->
					  <div class="navbar-search__box">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Search">
						  <span class="input-group-btn">
							<button type="submit" class="btn btn-primary">Go!</button>
						  </span>
						</div>
						<div class="navbar-search-box__tips">
						  E.g. "T-shirt..."
						</div>
					  </div>

					</form>
				  </div> <!-- / .navbar-search -->

				</li>

				<!-- Shopping cart -->
				<!-- <li class="navbar__shopping-cart">
				  <a href="shop_checkout.html">
					<i class="fa fa-shopping-cart"></i> 
					<span class="navbar__shopping-cart-items">3 <span class="visible-xs-inline">items</span></span>
				  </a>
				</li> -->

			  </ul> <!-- / .nav -->

			  <!-- Navbar Search (mobile) -->
			  <form class="navbar-form visible-xs">
				<div class="form-group">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-btn">
					  <button type="submit" class="btn btn-primary">Search!</button>
					</span>
				  </div>
				</div>
			  </form>

			</div><!--/.navbar-collapse -->
		  </div>
		</div> <!-- / .navigation -->
