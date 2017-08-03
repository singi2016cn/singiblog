<?php
/**
 * Singleton class for handling the theme's customizer integration.

 * @link https://github.com/justintadlock/trt-customizer-pro
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


if ( ! class_exists( 'Shadower_CustomizePro' ) ) {
	
	class Shadower_CustomizePro {

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return object
		 */
		public static function get_instance() {

			static $instance = null;

			if ( is_null( $instance ) ) {
				$instance = new self;
				$instance->setup_actions();
			}

			return $instance;
		}

		/**
		 * Constructor method.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function __construct() {}

		/**
		 * Sets up initial actions.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function setup_actions() {

			// Register panels, sections, settings, controls, and partials.
			add_action( 'customize_register', array( $this, 'sections' ) );

			// Register scripts and styles for the controls.
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
		}

		/**
		 * Sets up the customizer sections.
		 *
		 * @since  1.0.0
		 * @access public
		 * @param  object  $manager
		 * @return void
		 */
		public function sections( $manager ) {

			// Load custom sections.
			require_once SHADOWER_THEME_INC_PATH . '/admin/pro/section-pro.php';

			// Register custom section types.
			$manager->register_section_type( 'Shadower_Customize_Section_Pro' );

			// Register sections.
			$manager->add_section(
				new Shadower_Customize_Section_Pro(
					$manager,
					'shadower',
					array(
				        'priority' => 0,
						'title'    => esc_html__( 'Pro Version', 'shadower' ),
						'pro_text' => esc_html__( 'Check out', 'shadower' ),
						'pro_url'  => esc_url( 'https://uiux.cc/wp-theme-demo/shadower-pro-landing-page/' )
					)
				)
			);
		}

		/**
		 * Loads theme customizer CSS.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function enqueue_control_scripts() {
			
			wp_enqueue_script( SHADOWER_THEME_SLUG . '-customize-controls', SHADOWER_THEME_URL . '/includes/admin/pro/customize-controls.js', array( 'customize-controls' ) );
			wp_enqueue_style( SHADOWER_THEME_SLUG . '-customize-controls', SHADOWER_THEME_URL . '/includes/admin/pro/customize-controls.css' );
		}
	}	
}


Shadower_CustomizePro::get_instance();
