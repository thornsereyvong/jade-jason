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

		<title>Paperclip - Shop</title>		

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
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
			  <a class="navbar-brand" href="index-2.html">
				<i class="fa fa-paperclip"></i> JADE JASON
			  </a>

			</div> <!-- / .navbar-header -->
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav navbar-right">

				<!-- General links -->
				<li class="dropdown">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home </a>				  
				</li>
				<li class="dropdown">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Man </a>				  
				</li>
				<li class="dropdown">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Women </a>				  
				</li>
				<li class="dropdown">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Kids </a>				  
				</li>
				<!-- Navbar Search -->
				<li class="hidden-xs">
				  
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
