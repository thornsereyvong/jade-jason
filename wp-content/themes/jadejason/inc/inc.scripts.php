<?php

/**
 * Enqueue scripts and styles.
 */
 
if ( ! is_admin() ) add_action( "wp_enqueue_scripts", "my_jquery_enqueue", 11 );

function my_jquery_enqueue() {
	
	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "" ) . "://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", false, null);
	
	wp_enqueue_script( 'jquery' );
}

function camldp_scripts() {
	
	wp_enqueue_style( 'camwpdev-fonts', 'http://fonts.googleapis.com/css?family=Hanuman|Moul|Open+Sans:400,700' );
	wp_enqueue_style( 'camwpdev-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'camwpdev-style', get_stylesheet_uri() );
	
	if ( is_page( 'contact' ) ) {
		
		wp_enqueue_script( 'camwpdev-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBPVGIb0cmQZS688YzT2FhfS1etXYhdLm8', array(), '20120206', true );
		
	}
	
	wp_enqueue_script( 'camwpdev-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '20120206', true );
	
	wp_enqueue_script( 'camwpdev-main', get_template_directory_uri() . '/js/script.js', array(), '20120206', true );
	
}

add_action( 'wp_enqueue_scripts', 'camldp_scripts' );