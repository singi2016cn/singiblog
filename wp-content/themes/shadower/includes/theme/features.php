<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}



/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 */
if ( !function_exists( 'shadower_content_width' ) ) {
	add_action( 'after_setup_theme', 'shadower_content_width', 0 );
	function shadower_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'shadower_content_width', 1170 );
	}	
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
if ( !function_exists( 'shadower_setup' ) ) {

    add_action( 'after_setup_theme', 'shadower_setup' );
	function shadower_setup() {
	  
		/*
		 * To remove the default padding styles from WordPress for the Toolbar
		 *
		 */
		add_theme_support( 'admin-bar', array(
			'callback'          => '__return_false'
		) ); 	
		
		
		/*
		 * Set up the WordPress core custom background feature.
		 *
		 */
		add_theme_support( 'custom-background', array(
			'default-color'          => '',
			'default-image'          => '',
			'default-attachment'     => 'fixed',
		) ); 
	  
		/*
		 * Make theme available for translation.
		 *
		 */
		load_theme_textdomain( 'shadower', SHADOWER_THEME_ROOT_PATH . '/languages' );
	
		/*
		 * Add default posts and comments RSS feed links to head.
		 *
		 */
		add_theme_support( 'automatic-feed-links' );
	
	
		/*
		 * Let WordPress manage the document title.
		 *
		 */
		add_theme_support( 'title-tag' );
	
	
		/*
		 * This theme uses wp_nav_menu() in one location.
		 *
		 */
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'shadower' ),
			'footer'  => __( 'Footer Navigation', 'shadower' )
		) );
	
		/*
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 * 
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	

		/*
		 * Enable support for custom logo.
		 *
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 512,
			'width'       => 512,
			'flex-height' => true,
			'flex-width'  => true,
		) );
	

		
		/*
		 * Enable support for Post Formats.
		 *
		 */
		add_theme_support('post-formats', array(
			//'aside',
			//'image',
			//'status',
			//'chat',
			'video', 
			'quote', 
			'link', 
			'audio', 
			'gallery'
		));
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 */
		add_theme_support( 'post-thumbnails', array( 'post' ) );
		
		//Note: This function will not resize your existing featured images. To regenerate existing images in the new size, use the Regenerate Thumbnails plugin.
		set_post_thumbnail_size( 700, 450, true );
	
	    //Add image sizes
		add_image_size( 'shadower-post-thumbnail-large', 1920, 9999, false );
		
		// Add image sizes for retina
		add_image_size( 'shadower-post-retina-thumbnail', 700*2, 450*2, true );
		
	}
}



/**
 * Extend the default WordPress body classes.
 *
 */
if ( !function_exists( 'shadower_body_class' ) ) {
	
	add_filter( 'body_class', 'shadower_body_class' );
	function shadower_body_class( $classes ) {
		
		if ( is_home() || is_front_page() ) {
			$classes[] = 'custom-homepage';
		}
		
		if ( ! is_multi_author() ) {
			$classes[] = 'single-author';
		}
			
	
		if ( is_active_sidebar( 'sidebar-1' ) && ! is_attachment() && ! is_404() ) {
			$classes[] = 'sidebar';
		}
	
	
		return $classes;
	}
	
}


/**
 * Limit Search Results to Custom Post Type
 */
if ( !function_exists( 'shadower_body_class' ) ) {
	add_filter( 'pre_get_posts', 'shadower_searchfilter' );
	function shadower_searchfilter( $query ) {
		if ( $query->is_search ) {
			$query->set( 'post_type', array( 'post', 'uix-products' ) );
		};
		return $query;
	}

}



/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
if ( !function_exists( 'shadower_pingback_header' ) ) {
	add_action( 'wp_head', 'shadower_pingback_header' );
	function shadower_pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
		}
	}	
}


