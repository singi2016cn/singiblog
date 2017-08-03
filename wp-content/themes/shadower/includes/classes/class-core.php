<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

if ( !class_exists( 'Shadower_Core' ) ) {
	
	class Shadower_Core {
		
		
		/*
		 * Get latest page ID from template
		 *
         * [Usage:]
		 
		    echo esc_url( get_permalink( Shadower_Core::get_pageid_from_template( 'tmpl-blog.php' ) ) );
			
		 *
		 */
		public static function get_pageid_from_template( $template = '' ) {
	        
			$page_id = '';
			$pages = get_pages( array(
				'sort_order' => 'DESC',
				'meta_value' => $template
			) );
			
			foreach( $pages as $page ){
				$page_id = $page->ID;
				break;
			}
	
		   return $page_id;
	
		}	
		
		
		
		/*
		 * To determine whether the current page using the corresponding template
		 *
         * [Usage:]
		 
		    if ( Shadower_Core::check_curpage_from_template( get_the_ID(), array( 'tmpl-contact.php' ) ) ) {
			    ...
			}
			
		 *
		 */
		public static function check_curpage_from_template( $id = '', $templates = '' ) {
	        
			$cur      = false;
			
			foreach( $templates as $key ){
				$pages    = get_pages( array(
					'sort_order' => 'DESC',
					'meta_value' => $key
				) );

				foreach( $pages as $page ){
					if ( $id == $page->ID ) {
						$cur = true;
						break;
					}
				}	
			}	
			
	
			
		   return $cur;
	
		}		
		
		
		
		/*
		 * The function finds the position of the first occurrence of a string inside another string.
		 *
		 * As strpos may return either FALSE (substring absent) or 0 (substring at start of string), strict versus loose equivalency operators must be used very carefully.
		 *
		 */
		public static function inc_str( $str, $incstr ) {
		
			if ( mb_strlen( strpos( $str, $incstr ), 'UTF8' ) > 0 ) {
				return true;
			} else {
				return false;
			}
	
		}
		
	
	
		
	}

}

