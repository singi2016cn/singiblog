<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

 
if ( !function_exists( 'shadower_get_content_linkurl' ) ) {
	
	function shadower_get_content_linkurl() {
		$has_url = get_url_in_content( get_the_content() );

		return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	}
	
}

