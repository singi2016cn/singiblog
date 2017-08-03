<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


/**
 * Enqueue scripts in customize admin screen
 *
 */
if( !function_exists( 'shadower_register_adminscreens_customize_scripts' ) ) {
	
	add_action( 'customize_controls_enqueue_scripts', 'shadower_register_adminscreens_customize_scripts' );
	function shadower_register_adminscreens_customize_scripts() {
		
		wp_enqueue_script( SHADOWER_THEME_SLUG . '-admin-customize', SHADOWER_THEME_ADMIN_ASSETS_URL . '/js/admin-customize.js', array( 'customize-controls' ) );
	
	}
	
}



/**
 * Enqueue styles in admin area
 *
 */
if( !function_exists( 'shadower_register_adminscreens_styles' ) ) {
	
	add_action( 'admin_enqueue_scripts', 'shadower_register_adminscreens_styles' );
	function shadower_register_adminscreens_styles() {
		
		wp_register_style( SHADOWER_THEME_SLUG . '-admin-screens', SHADOWER_THEME_ADMIN_ASSETS_URL . '/css/admin-screens.css', false, SHADOWER_THEME_VERSION, 'all' );
		wp_register_style( 'font-awesome', SHADOWER_THEME_URL . '/assets/icons/fontawesome/font-awesome.min.css', false, '4.5.0', 'all' );
	
	}
	
}

if( !function_exists( 'shadower_enqueue_adminscreens_styles' ) ) {
	
	add_action( 'admin_enqueue_scripts', 'shadower_enqueue_adminscreens_styles' );
	function shadower_enqueue_adminscreens_styles() {
		
		  //Check if screen ID
		  $currentScreen = get_current_screen();

		  if ( $currentScreen->base === "post" || 
			   $currentScreen->base === "edit" || 
			   $currentScreen->base === "widgets" ||
			   $currentScreen->base === "nav-menus" ||
			  $currentScreen->base === "customize"
			 ) 
		  {
				wp_enqueue_style( SHADOWER_THEME_SLUG . '-admin-screens' );
				wp_enqueue_style( 'font-awesome' );

		  }
	

	
	}
	
}





/*
 * This theme styles the visual editor to resemble the theme style,
 * specifically font, colors, icons, and column width.
 */
if ( !function_exists ( 'shadower_add_editor_styles' ) ) {
	add_action( 'admin_init', 'shadower_add_editor_styles' );
	function shadower_add_editor_styles() {
		add_editor_style( SHADOWER_THEME_ADMIN_ASSETS_URL . '/css/custom-editor-style.css' );
	}
}


/*
 * "Pro" theme section examples for the customizer.
 */
require_once SHADOWER_THEME_INC_PATH . '/admin/pro/class-customize.php';
