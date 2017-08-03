<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

 
if ( !function_exists( 'shadower_get_content_video' ) ) {
	
	function shadower_get_content_video() {

		$content = apply_filters( 'the_content', get_the_content() );
		$video   = false;
		$output  = '';

		// Only get audio from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
		}

		if ( ! empty( $video ) ) {
			foreach ( $video as $video_html ) {
				$output .= '<div class="entry-video">';
				$output .= $video_html;
				$output .= '</div>';
			}	
		}

		return $output;
	}
	
}

