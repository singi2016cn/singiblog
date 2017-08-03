<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


if ( !function_exists( 'shadower_filter_tagcloud' ) ) {
	function shadower_filter_tagcloud($text) {
		$text = preg_replace_callback( '|<a (.+?)</a>|i','shadower_filter_tagcloud_callback',$text);
		return $text;
	}

}


if ( !function_exists( 'shadower_filter_tagcloud_callback' ) ) {
	
	add_filter( 'wp_tag_cloud', 'shadower_filter_tagcloud', 1 );
	function shadower_filter_tagcloud_callback( $matches ) {
		$text = $matches[1];
		$text = str_replace( 'class=','class=\'tag-link\' data-tag-id=',
		        str_replace( 'style=','data-no-style=',
		       $text
			   ));
		
		return "<a ".$text."</a>";
		
	}

}
