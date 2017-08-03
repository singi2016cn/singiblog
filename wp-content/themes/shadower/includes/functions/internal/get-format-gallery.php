<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

 
if ( !function_exists( 'shadower_get_content_gallery' ) ) {
	
	function shadower_get_content_gallery() {

		$output  = '';

		if ( get_post_gallery() ) {
			$output .= '<div class="entry-gallery">';
			$output .= get_post_gallery();
			$output .= '</div>';	
		}

		return $output;
	}
	
}


//Change WordPress default gallery output
if ( !function_exists( 'shadower_custom_post_gallery_output' ) ) {
	
	add_filter( 'post_gallery', 'shadower_custom_post_gallery_output', 10, 2 );
	function shadower_custom_post_gallery_output( $output, $attr ) {
		$post = get_post();

		if ( isset( $attr['orderby'] ) ) {
			$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
			if ( !$attr['orderby'] )
				unset( $attr['orderby'] );
		}

		extract( shortcode_atts( array( 
			'order'      => 'ASC',
			'orderby'    => 'menu_order ID',
			'id'         => $post ? $post->ID : 0,
			'itemtag'    => 'dl',
			'icontag'    => 'dt',
			'captiontag' => 'dd',
			'columns'    => 3,
			'size'       => 'thumbnail',
			'include'    => '',
			'exclude'    => ''
		 ), $attr ) );

		$id = absint( $id );
		if ( 'RAND' == $order ) $orderby = 'none';

		if ( !empty( $include ) ) {
			$include = preg_replace( '/[^0-9,]+/', '', $include );
			$_attachments = get_posts( array( 'include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );

			$attachments = array(  );
			foreach ( $_attachments as $key => $val ) {
				$attachments[$val->ID] = $_attachments[$key];
			}
		}

		if ( empty( $attachments ) ) return '';

		$output  = '<div class="custom-theme-flexslider '.( !is_single() ? 'entry-complex-container' : '' ).'">'.PHP_EOL;
		$output .= '<div class="custom-theme-slides">'.PHP_EOL;



		foreach ( $attachments as $id => $attachment ) {

		
			$img    = wp_prepare_attachment_for_js( $id );
			$imgurl = wp_get_attachment_url( $id );


			// If you want a different size change 'large' to eg. "thumbnail", "medium", "large" and "full"
			$url  = $imgurl;
			$url2 = $imgurl;
			$url3 = $imgurl;

			if ( isset( $img['sizes']['large'] ) ) {
				$url = $img['sizes']['large']['url'];
			}
			if ( isset( $img['sizes']['medium'] ) ) {
				$url2 = $img['sizes']['medium']['url'];
			}
			if ( isset( $img['sizes']['full'] ) ) {
				$url3 = $img['sizes']['full']['url'];
			}

			$alt = $img['alt'];

			// Store the caption
			$caption = $img['caption'];

			$output .= '<div class="item">'.PHP_EOL;
			if ( is_single() ) {
				$output .= '<a href="'.esc_url( $url3 ).'" title="'.esc_attr( $alt ).'" rel="alternate['.esc_attr( $post->ID ).']"><img src="'.esc_url( $url ).'" alt="'.esc_attr( $alt ).'"></a>'.PHP_EOL;
			} else {
				$output .= '<img src="'.esc_url( $url2 ).'" alt="'.esc_attr( $alt ).'">'.PHP_EOL;
			}

			$output .= '</div>'.PHP_EOL;

			// Output the caption
			if ( $caption ) { 

			}
			
		}


		$output .= '</div>'.PHP_EOL;
		$output .= '</div>'.PHP_EOL;

		return $output;
	}

	
}


