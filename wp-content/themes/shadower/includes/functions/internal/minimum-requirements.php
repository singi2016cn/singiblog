<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}



if ( !function_exists( 'shadower_minimum_requirements' ) && current_user_can( 'install_themes' ) ) {

	// Essentially the theme activation hook.
	// @see https://developer.wordpress.org/reference/hooks/after_switch_theme/
	add_action( 'after_switch_theme', 'shadower_minimum_requirements', 10, 2 );

	// Check minimum PHP version requirements.
	function shadower_minimum_requirements( $old_name, $old_theme ) {

		// Theme requires PHP 5.3+
		if ( version_compare( PHP_VERSION, '5.3.0' ) < 0 ) {

			// Add the admin notice to the WordPress dashboard.
			// @see https://developer.wordpress.org/reference/hooks/admin_notices/
			add_action( 'admin_notices', 'shadower_minimum_requirements_notice' );

			// Prints the markup for the admin notice.
			function shadower_minimum_requirements_notice() {
				?>
				<div class="error">
					<p>
						<?php printf(
							esc_html__( 'You\'re running WordPress on PHP version %s. Please contact your hosting company and updgrade PHP to 5.3 or above.', 'shadower' ),
							PHP_VERSION
						); ?>
					</p>
				</div>
				<?php
			}

			// Switch back to old theme if version check fails.
			// @see https://developer.wordpress.org/reference/functions/switch_theme/
			switch_theme( $old_theme->stylesheet );
			return false;
		}
	}
}

