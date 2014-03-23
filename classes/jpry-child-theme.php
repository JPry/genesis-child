<?php


// Possibly include the JPry_Singleton class
if ( ! class_exists( 'JPry_Singleton', false ) ) {
	require_once( CHILD_THEME_DIR . '/classes/jpry-singleton.php' );
}


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
