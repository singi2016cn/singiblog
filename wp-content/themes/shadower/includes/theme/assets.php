<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}



/**
 * Enqueue scripts in the front-end
 *
 */
if( !function_exists( 'shadower_register_scripts' ) ) {
	
	add_action( 'init', 'shadower_register_scripts' );
	function shadower_register_scripts(){
		
		wp_register_script( 'ie-respond', SHADOWER_THEME_URL . '/assets/js/min/respond.min.js', false, '1.4.2', false );
		wp_register_script( 'modernizr', SHADOWER_THEME_URL . '/assets/js/min/modernizr.min.js', false, '3.3.1', false );
		wp_register_script( 'jquery-easing', SHADOWER_THEME_URL . '/assets/js/min/jquery.easing.min.js', array( 'jquery' ), '1.3', false );
		wp_register_script( 'jquery-mousewheel', SHADOWER_THEME_URL . '/assets/js/min/jquery.mousewheel.min.js', array( 'jquery' ), '3.1.12', false );
		wp_register_script( 'prettyPhoto', SHADOWER_THEME_URL . '/assets/js/min/jquery.prettyPhoto.min.js', array( 'jquery' ), '3.1.5', true );
		wp_register_script( 'flexslider', SHADOWER_THEME_URL . '/assets/js/min/jquery.flexslider.min.js', array( 'jquery' ), '2.6.2', true );
		wp_register_script( 'shuffle', SHADOWER_THEME_URL . '/assets/js/min/jquery.shuffle.min.js', array( 'jquery' ), '3.1.1', true );
		wp_register_script( 'bgParallax', SHADOWER_THEME_URL . '/assets/js/min/jquery.bgParallax.min.js', array( 'jquery' ), '1.1.3', true );
		wp_register_script( SHADOWER_THEME_SLUG . '-scrollreveal', SHADOWER_THEME_URL . '/assets/js/min/scrollreveal.min.js', array( 'jquery' ), '3.3.1', true );	
		wp_register_script( SHADOWER_THEME_SLUG . '-waitforimages', SHADOWER_THEME_URL . '/assets/js/min/jquery.waitforimages.min.js', array( 'jquery' ), '1.5.0', true );	
		wp_register_script( SHADOWER_THEME_SLUG . '-totop', SHADOWER_THEME_URL . '/assets/js/min/jquery.ui.totop.min.js', array( 'jquery' ), '1.2', true );
		wp_register_script( SHADOWER_THEME_SLUG . '-sidr', SHADOWER_THEME_URL . '/assets/js/min/jquery.sidr.min.js', array( 'jquery' ), '2.2.1', true );
		wp_register_script( SHADOWER_THEME_SLUG . '-animsition', SHADOWER_THEME_URL . '/assets/js/min/animsition.min.js', array( 'jquery' ), '4.0.2', true );		
		wp_register_script( SHADOWER_THEME_SLUG . '-scrolltofixed', SHADOWER_THEME_URL . '/assets/js/min/jquery.scrolltofixed.min.js', array( 'jquery' ), '1.0.0', true );
		
		

	}
}


 
if( !function_exists( 'shadower_enqueue_scripts' ) ) {
	
	add_action( 'wp_enqueue_scripts', 'shadower_enqueue_scripts' );
	function shadower_enqueue_scripts(){
		
	    // Internet Explorer 8 media query support
		wp_enqueue_script( 'ie-respond' );
		wp_script_add_data( 'ie-respond', 'conditional', 'lt IE 9' );
			
		
	    // Add main scripts
		wp_enqueue_script( SHADOWER_THEME_SLUG . '-main', SHADOWER_THEME_URL . '/assets/js/min/script.min.js', 
		    array( 
			    'jquery',
				'jquery-easing',
				'jquery-mousewheel',
				'modernizr',
				'prettyPhoto',
				'flexslider',
				'bgParallax',
			    'masonry',
				SHADOWER_THEME_SLUG . '-scrollreveal',
				SHADOWER_THEME_SLUG . '-waitforimages',
				SHADOWER_THEME_SLUG . '-totop',
				SHADOWER_THEME_SLUG . '-sidr',
				SHADOWER_THEME_SLUG . '-animsition',
				SHADOWER_THEME_SLUG . '-scrolltofixed'
			), SHADOWER_THEME_VERSION, true );
		
		
		// Theme path in javascript file ( var templateUrl = wp_theme_root_path.templateUrl; )
		$translation_array = array( 
		    'templateUrl' => get_stylesheet_directory_uri(),
			'homeUrl'     => home_url()
		 );
        wp_localize_script( SHADOWER_THEME_SLUG . '-main',  'wp_theme_root_path', $translation_array );
		
		
		//Quick Reply is the ability to respond to a message without URL jump.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	

	}
}



/**
 * Enqueue styles in the front-end
 *
 */
if( !function_exists( 'shadower_register_styles' ) ) {
	
	add_action( 'init', 'shadower_register_styles' );
	function shadower_register_styles(){
		
		wp_register_style( 'old-ie', SHADOWER_THEME_URL . '/assets/css/old-ie.css', false, SHADOWER_THEME_VERSION, 'all' );
		wp_register_style( 'font-awesome', SHADOWER_THEME_URL . '/assets/icons/fontawesome/font-awesome.min.css', false, '4.5.0', 'all' );
		wp_register_style( 'bootstrap', SHADOWER_THEME_URL . '/assets/css/bootstrap.min.css', false, '3.3.7', 'all' );
		wp_register_style( 'flexslider', SHADOWER_THEME_URL . '/assets/css/flexslider.css', false, '2.6.2', 'all' );
		wp_register_style( 'prettyPhoto', SHADOWER_THEME_URL . '/assets/css/jquery.prettyPhoto.css', false, '3.1.5', 'all' );
		wp_register_style( SHADOWER_THEME_SLUG . '-flexslider-custom', SHADOWER_THEME_URL . '/assets/css/flexslider-custom.css', false, SHADOWER_THEME_VERSION, 'all' );
		wp_register_style( SHADOWER_THEME_SLUG . '-animsition', SHADOWER_THEME_URL . '/assets/css/animsition.min.css', false, '4.0.2', 'all' );
		wp_register_style( SHADOWER_THEME_SLUG . '-main', SHADOWER_THEME_URL . '/assets/css/main.min.css', false, SHADOWER_THEME_VERSION, 'all' );
		wp_register_style( SHADOWER_THEME_SLUG . '-main-mobile', SHADOWER_THEME_URL . '/assets/css/jquery.sidr.light.css', false, SHADOWER_THEME_VERSION, 'all' );
		
		//RTL
		wp_register_style( 'bootstrap-rtl', SHADOWER_THEME_URL . '/assets/css/rtl/bootstrap.rtl.min.css', false, '3.3.7', 'all' );
		wp_register_style( 'prettyPhoto-rtl', SHADOWER_THEME_URL . '/assets/css/rtl/jquery.prettyPhoto.rtl.css', false, '3.1.5', 'all' );
		wp_register_style( SHADOWER_THEME_SLUG . '-main-mobile-rtl', SHADOWER_THEME_URL . '/assets/css/rtl/jquery.sidr.light.rtl.css', false, SHADOWER_THEME_VERSION, 'all' );

		

	}
}


if( !function_exists( 'shadower_enqueue_styles' ) ) {
	
	add_action( 'wp_enqueue_scripts', 'shadower_enqueue_styles' );
	function shadower_enqueue_styles(){
		
		// Add main styles
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'flexslider' );
		wp_enqueue_style( 'prettyPhoto' );
		wp_enqueue_style( SHADOWER_THEME_SLUG . '-flexslider-custom' );
		wp_enqueue_style( SHADOWER_THEME_SLUG . '-animsition' );
		wp_enqueue_style( SHADOWER_THEME_SLUG . '-main' );
		wp_enqueue_style( SHADOWER_THEME_SLUG . '-main-mobile' );
		
		// Load our IE specific stylesheet for a range of older versions
        wp_enqueue_style( 'old-ie' );
        wp_style_add_data( 'old-ie', 'conditional', 'lt IE 10' );
		
		//RTL		
		if ( is_rtl() ) {
			wp_enqueue_style( 'bootstrap-rtl' );
			wp_enqueue_style( 'prettyPhoto-rtl' );
			wp_enqueue_style( SHADOWER_THEME_SLUG . '-main-mobile-rtl' );
		}
		
		
	}
}
