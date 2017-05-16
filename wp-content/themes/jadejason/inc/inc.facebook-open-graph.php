<?php

//Adding the Open Graph in the Language Attributes

function add_opengraph_doctype( $output ) {

	return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	
}

add_filter('language_attributes', 'add_opengraph_doctype');


//Lets add Open Graph Meta Info

function insert_fb_in_head() {

	global $post;
	
	if ( is_singular() ) {
		
		if ( is_front_page() || is_home() ) {
	
			echo "<meta property='og:title' content='គណបក្សសម្ព័ន្ធដើម្បីប្រជាធិបតេយ្យ' />";
			
			echo "<meta property='og:site_name' content='" . get_bloginfo() . "' />";
			
			echo "<meta property='og:url' content='" . home_url( '/' ) . "' />";
			
			echo "<meta property='og:description' content='description goes here' />";
			
			echo "<meta property='og:type' content='website' /><meta property='fb:app_id' content='332367590161171'>";
			
			echo '<meta property="og:image" content="' . get_template_directory_uri() . "/images/default-featured.jpg" . '"/>';
			
		} else {
	
			echo "<meta property='og:title' content='" . get_the_title() . "' />";
			
			echo "<meta property='og:site_name' content='" . get_bloginfo() . "' />";
			
			echo "<meta property='og:url' content='" . get_permalink() . "' />";
			
			echo "<meta property='og:description' content='" .  get_the_excerpt() . "' />";
			
			echo "<meta property='og:type' content='article' /><meta property='fb:app_id' content='332367590161171'>";
				
			if ( ! has_post_thumbnail( $post->ID ) ) { //the post does not have featured image, use a default image
					
				$default_image = get_template_directory_uri() . "/images/default-featured.jpg"; //replace this with a default image on your server or an image in your media library
			
				echo '<meta property="og:image" content="' . $default_image . '" />';
				
			} else {
			
				$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				
				if ( is_array( $thumbnail_src ) ) {
				
					echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
				
				} else {
					
					echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src ) . '"/>';
					
				}

			}
		}
		
	}
}

add_action( 'wp_head', 'insert_fb_in_head', 5 );