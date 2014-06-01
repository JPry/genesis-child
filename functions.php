<?php
/**
 * Functions
 *
 * @package JPry_Genesis_Child
 * @since 1.0
 * @author Jeremy Pry
 * @copyright (c) 2014, Jeremy Pry
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
 
 // Child theme data
$theme = wp_get_theme();
define( 'CHILD_THEME_NAME', $theme->get( 'Name' ) );
define( 'CHILD_THEME_URL', 'https://github.com/JPry/genesis-child/' );
define( 'CHILD_THEME_VERSION', $theme->get( 'Version' ) );

// Include the Classes that do all the work
require_once( get_stylesheet_directory() . '/classes/jpry-child-theme.php' );

// Call the main theme class to set everything up
JPry_Child_Theme::get_instance();
