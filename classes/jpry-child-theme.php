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
	 */
	protected function __construct() {
		add_action( 'genesis_setup', array( $this, 'child_theme_setup' ), 15 );
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
}
