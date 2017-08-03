<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

 
if ( !function_exists( 'shadower_get_content_audio' ) ) {
	
	function shadower_get_content_audio() {

		$content = apply_filters( 'the_content', get_the_content() );
		$audio   = false;
		$output  = '';

		// Only get audio from the content if a playlist isn't present.
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}

		if ( ! empty( $audio ) ) {
			foreach ( $audio as $audio_html ) {
				$output .= '<div class="entry-audio">';
				$output .= $audio_html;
				$output .= '</div>';
			}	
		}

		return $output;
	}
	
}

