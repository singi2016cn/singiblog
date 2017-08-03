/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
	//Update site background color
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			wp.customize.previewer.refresh();
			
		} );
	} );
	
	//Update site background image
	wp.customize( 'background_image', function( value ) {
		value.bind( function( newval ) {
			wp.customize.previewer.refresh();
			
		} );
	} );	
	
	
} )( jQuery );