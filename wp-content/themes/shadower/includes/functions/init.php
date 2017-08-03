<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

// Check the theme minimum requirements for running
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/minimum-requirements.php';

// Returns security string
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/string.php';

// Returns the optional custom logo URL.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/brand.php';

// Change the comment reply link to use 'Reply to <Author First Name>'
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/comment-reply.php';

// Add a filter to add a class to tag link in wordpress
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/post-tag.php';

// Given the count of the posts with that tag.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/tagcloud.php';

// Remove image dimension attributes
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/thumb.php';

// Limit excerpt length by characters & automatic get excerpt
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/filter-excerpt.php';

// The following example adds an attribute to specific menu items. Specify the ID of each menu item as an array.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/menu-attributes.php';


/*
 * Post formats when not to use Meta boxes  for content creation.
 *
 */
// Return the post URL. (Falls back to the post permalink if no URL is found in the post.)
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/get-format-link.php';

// Return the post audio from the content.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/get-format-audio.php';

// Return the post video from the content.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/get-format-video.php';

// Return the post gallery from the content.
require_once SHADOWER_THEME_INC_PATH . '/functions/internal/get-format-gallery.php';



