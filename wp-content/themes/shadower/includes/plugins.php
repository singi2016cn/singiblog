<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


//require_once SHADOWER_THEME_INC_PATH . '/tgm/class-tgm-plugin-activation.php';

/**
 * Since I'm already doing a tutorial, I'm not going to include comments to
 * this code, but if you want, you can check out the "example.php" file
 * inside the ZIP you downloaded - it has a very detailed documentation.
 */
 
if( !function_exists( 'shadower_require_plugins' ) ) {
	
	add_action( 'tgmpa_register', 'shadower_require_plugins' );
	function shadower_require_plugins() {
	 
		$plugins = array(
		
			array(
				'name'               => 'Kirki', 
				'slug'               => 'kirki',
				'required'           => false,
				'version'            => '2.3.7'
			),
	
			array(
				'name'               => 'Uix Shortcodes', 
				'slug'               => 'uix-shortcodes',
				'required'           => false,
				'version'            => '1.4.7'
			),
		
			array(
				'name'               => 'Uix Slideshow', 
				'slug'               => 'uix-slideshow',
				'required'           => false,
				'version'            => '1.1.2'
			),
				
			
		);
		$config = array(
			'id'           => 'shadower-tgmpa', // your unique TGMPA ID
			'default_path' => '', // default absolute path
			'menu'         => 'shadower-install-required-plugins', // menu slug
			'has_notices'  => true, // Show admin notices
			'dismissable'  => false, // the notices are NOT dismissable
			'dismiss_msg'  => '', // this message will be output at top of nag
			'is_automatic' => true, // automatically activate plugins after installation
			'message'      => '', // message to output right before the plugins table
			'strings'      => array() // The array of message strings that TGM Plugin Activation uses
		);
	 
		tgmpa( $plugins, $config );
	 
	}

	
}

