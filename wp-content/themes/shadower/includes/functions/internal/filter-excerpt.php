<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}
 
/**
 * Filters the Read More link text.
 *
 * @link https://developer.wordpress.org/reference/hooks/the_content_more_link/
 */
if ( ! function_exists( 'shadower_modify_read_more_link' ) ) {
	
	add_filter( 'the_content_more_link', 'shadower_modify_read_more_link' );
	function shadower_modify_read_more_link( $more ) {
	    
		return '<p><a href="' . esc_url( get_permalink() ) . '" class="link">' .shadower_wp_kses( __( 'Continue Reading', 'shadower' ) ). '</a></p>';
		
	}
	
}



/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @link https://developer.wordpress.org/reference/functions/the_excerpt/
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
if ( ! function_exists( 'shadower_excerpt_more' ) ) {
	add_filter( 'excerpt_more', 'shadower_excerpt_more' );
	function shadower_excerpt_more( $more ) {
		return sprintf( '<p><a class="link" href="%1$s">%2$s</a></p>',
			get_permalink( get_the_ID() ),
			esc_html__( 'Continue reading', 'shadower' )
		);
	}	
}


/**
 * Filter the except length to 20 words.
 *
 * @link https://developer.wordpress.org/reference/functions/the_excerpt/
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
if ( ! function_exists( 'shadower_custom_excerpt_length' ) ) {
	add_filter( 'excerpt_length', 'shadower_custom_excerpt_length', 999 );
	function shadower_custom_excerpt_length( $length ) {
		$custom_length = absint( get_theme_mod( 'custom_blog_excerpt_words', 35 ) );
		return $custom_length;
	}
}

