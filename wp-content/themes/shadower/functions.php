<?php
/****************************************************************
 * Theme functions and definitions.
 ****************************************************************/
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}
 
 
/**
 * General constant definition ( Do not delete )
 */
define('SHADOWER_THEME_VERSION',wp_get_theme()->display( 'Version' ));
define('SHADOWER_THEME_SLUG', 'shadower' );
define('SHADOWER_THEME_URL', get_template_directory_uri() );
define('SHADOWER_THEME_ADMIN_ASSETS_URL', get_template_directory_uri(). '/includes/admin/assets' );
define('SHADOWER_THEME_ROOT_PATH', get_template_directory() );
define('SHADOWER_THEME_INC_PATH', get_template_directory() . '/includes');


/**
 * Basic WP core functions
 */
require_once SHADOWER_THEME_INC_PATH . '/functions/init.php';


/**
 * Default demo data
 */
require_once SHADOWER_THEME_INC_PATH . '/default-data/widgets.php';


/**
 * Load all the theme functions & classes in the directory
 */
require_once SHADOWER_THEME_INC_PATH . '/admin/admin-init.php';
require_once SHADOWER_THEME_INC_PATH . '/classes/autoloader.php';
require_once SHADOWER_THEME_INC_PATH . '/plugins.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/assets.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/features.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/custom-header.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/widgets.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/comment.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/customize-controls.php';
require_once SHADOWER_THEME_INC_PATH . '/theme/templates.php';

