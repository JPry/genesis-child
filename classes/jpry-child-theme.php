<?php
/**
 * The main set of Theme customizations
 *
 * @package JPry_Genesis_Child
 * @subpackage JPry_Child_Theme
 * @since 1.0
 * @author Jeremy Pry
 * @copyright (c) 2014, Jeremy Pry
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

// Possibly include the JPry_Singleton class
if ( ! class_exists( 'JPry_Singleton', false ) ) {
	require_once( CHILD_THEME_DIR . '/classes/jpry-singleton.php' );
}

/**
 * The main Theme customizations
 */
class JPry_Child_Theme extends JPry_Singleton {

	/**
	 * Constructor.
	 *
	 * Add the methods of this class to appropriate WordPress hooks
	 *
	 * @since 1.0
	 */
	protected function __construct() {
		// All of the add/remove_theme_support() stuff
		add_action( 'genesis_setup', array( $this, 'child_theme_setup' ), 15 );

		// Actions
		$this->_actions();

		// Filters
		$this->_filters();
	}

	/**
	 * All of the WordPress actions that we're modifying
	 *
	 * @since 1.0
	 */
	protected function _actions() {
		// Remove the default Genesis style registration
		remove_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 5 );
		
		// Our styles
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
	}

	/**
	 * All of the WordPress filters that we're modifying
	 *
	 * @since 1.0
	 */
	protected function _filters() {

	}

	/**
	 * Theme Setup
	 *
	 * @since 1.0
	 */
	public function child_theme_setup() {
		// Add HTML5 markup structure
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
		
		// Add viewport meta tag for mobile browsers
		add_theme_support( 'genesis-responsive-viewport' );
		
		// Remove Genesis Readme
		remove_theme_support( 'genesis-readme-menu' );
	}
	
	/**
	 * Enqueue styles
	 * 
	 * @since 1.0
	 */
	public function styles() {
		// Main stylesheet
		wp_enqueue_style( 'jpry-child', get_stylesheet_uri(), array(), CHILD_THEME_VERSION );
	}
}
