<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


/*
 * Display icons linked to social profiles.
 * 
 */
if ( !function_exists( 'shadower_social_buttons' ) ) {
	
	function shadower_social_buttons() {
		
		$social_btn = '';
		
		$twitter     = esc_url( get_theme_mod( 'custom_social_twitter' ) );
		$facebook    = esc_url( get_theme_mod( 'custom_social_facebook' ) );
		$googleplus  = esc_url( get_theme_mod( 'custom_social_googleplus' ) );
		$medium      = esc_url( get_theme_mod( 'custom_social_medium' ) );
		$dribbble    = esc_url( get_theme_mod( 'custom_social_dribbble' ) );
		$pinterest   = esc_url( get_theme_mod( 'custom_social_pinterest' ) );
		$behance     = esc_url( get_theme_mod( 'custom_social_behance' ) );
		$deviantart  = esc_url( get_theme_mod( 'custom_social_deviantart' ) );
		$flickr      = esc_url( get_theme_mod( 'custom_social_flickr' ) );
		$github      = esc_url( get_theme_mod( 'custom_social_github' ) );
		$instagram   = esc_url( get_theme_mod( 'custom_social_instagram' ) );
		$linkedin    = esc_url( get_theme_mod( 'custom_social_linkedin' ) );
		$digg        = esc_url( get_theme_mod( 'custom_social_digg' ) );
		$tumblr      = esc_url( get_theme_mod( 'custom_social_tumblr' ) );
		$youtube     = esc_url( get_theme_mod( 'custom_social_youtube' ) );
		$vimeo       = esc_url( get_theme_mod( 'custom_social_vimeo' ) );
		$reddit      = esc_url( get_theme_mod( 'custom_social_reddit' ) );
		$producthunt = esc_url( get_theme_mod( 'custom_social_producthunt' ) );
		$lastfm      = esc_url( get_theme_mod( 'custom_social_lastfm' ) );
		$soundcloud  = esc_url( get_theme_mod( 'custom_social_soundcloud' ) );
		$dropbox     = esc_url( get_theme_mod( 'custom_social_dropbox' ) );
		$weibo       = esc_url( get_theme_mod( 'custom_social_weibo' ) );
		$web         = esc_url( get_theme_mod( 'custom_social_web' ) );
		
		
		
		if ( !empty( $twitter ) )       $social_btn .= '<li><a href="'.esc_url( $twitter ).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
		if ( !empty( $facebook ) )      $social_btn .= '<li><a href="'.esc_url( $facebook ).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
		if ( !empty( $googleplus ) )    $social_btn .= '<li><a href="'.esc_url( $googleplus ).'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
		if ( !empty( $medium ) )        $social_btn .= '<li><a href="'.esc_url( $medium ).'" target="_blank"><i class="fa fa-medium"></i></a></li>';
		if ( !empty( $dribbble ) )      $social_btn .= '<li><a href="'.esc_url( $dribbble ).'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
		if ( !empty( $pinterest ) )     $social_btn .= '<li><a href="'.esc_url( $pinterest ).'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
		if ( !empty( $behance) )        $social_btn .= '<li><a href="'.esc_url( $behance ).'" target="_blank"><i class="fa fa-behance"></i></a></li>';
		if ( !empty( $deviantart) )     $social_btn .= '<li><a href="'.esc_url( $deviantart ).'" target="_blank"><i class="fa fa-deviantart"></i></a></li>';
		if ( !empty( $flickr) )         $social_btn .= '<li><a href="'.esc_url( $flickr ).'" target="_blank"><i class="fa fa-flickr"></i></a></li>';
		if ( !empty( $github) )         $social_btn .= '<li><a href="'.esc_url( $github ).'" target="_blank"><i class="fa fa-github"></i></a></li>';
		if ( !empty( $instagram) )      $social_btn .= '<li><a href="'.esc_url( $instagram ).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
		if ( !empty( $linkedin) )       $social_btn .= '<li><a href="'.esc_url( $linkedin ).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
		if ( !empty( $digg) )           $social_btn .= '<li><a href="'.esc_url( $digg ).'" target="_blank"><i class="fa fa-digg"></i></a></li>';
		if ( !empty( $tumblr) )         $social_btn .= '<li><a href="'.esc_url( $tumblr ).'" target="_blank"><i class="fa fa-tumblr"></i></a></li>';
		if ( !empty( $youtube) )        $social_btn .= '<li><a href="'.esc_url( $youtube ).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
		if ( !empty( $vimeo) )          $social_btn .= '<li><a href="'.esc_url( $vimeo ).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
		if ( !empty( $reddit) )         $social_btn .= '<li><a href="'.esc_url( $reddit ).'" target="_blank"><i class="fa fa-reddit"></i></a></li>';
		if ( !empty( $producthunt) )    $social_btn .= '<li><a href="'.esc_url( $producthunt ).'" target="_blank"><i class="fa fa-product-hunt"></i></a></li>';
		if ( !empty( $lastfm) )         $social_btn .= '<li><a href="'.esc_url( $lastfm ).'" target="_blank"><i class="fa fa-lastfm"></i></a></li>';
		if ( !empty( $soundcloud) )     $social_btn .= '<li><a href="'.esc_url( $soundcloud ).'" target="_blank"><i class="fa fa-soundcloud"></i></a></li>';
		if ( !empty( $dropbox) )        $social_btn .= '<li><a href="'.esc_url( $dropbox ).'" target="_blank"><i class="fa fa-dropbox"></i></a></li>';
		if ( !empty( $weibo) )          $social_btn .= '<li><a href="'.esc_url( $weibo ).'" target="_blank"><i class="fa fa-weibo"></i></a></li>';
		if ( !empty( $web) )            $social_btn .= '<li><a href="'.esc_url( $web ).'" target="_blank"><i class="fa fa-globe"></i></a></li>';
		
		echo shadower_wp_kses( $social_btn );
		
	}

}



/*
 * The number of posts displayed on your blog
 * 
 */
if ( !function_exists( 'shadower_blog_show' ) ) {
	
	function shadower_blog_show() {
		
		$per = get_option( 'posts_per_page' );
		return $per;
	
	}	
}

/*
 * Returns the blog layout.
 * 
 */
if ( !function_exists( 'shadower_blog_layout' ) ) {
	
	function shadower_blog_layout() {

		return esc_html( get_theme_mod( 'custom_blog_layout', 'sidebar' ) );
	
	}	
}


/*
 * Returns the default featured image.
 * 
 */
if ( !function_exists( 'shadower_default_featured_image' ) ) {
	
	function shadower_default_featured_image() {

		return esc_url( SHADOWER_THEME_URL.'/assets/images/default-cover.jpg' );
	
	}	
}

