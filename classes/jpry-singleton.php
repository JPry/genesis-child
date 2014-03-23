<?php
/**
 * Singleton Class
 *
 * @package JPry_Genesis_Child
 * @subpackage JPrySingleton
 * @since 1.0
 * @author Jeremy Pry
 * @copyright (c) 2014, Jeremy Pry
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

if ( ! class_exists( 'JPry_Singleton', false ) ) :
/**
 * An abstract class the sets up the "singleton" mode for other classes
 *
 * With classes in WordPress, it is often desirable to instantiate the class only once, to prevent
 * collisions when hooking into WordPress actions and filters.
 */
abstract class JPry_Singleton {

	/**
	 * The Singleton instance of this class
	 * 
	 * @var object 
	 */
	protected static $instance = null;

	/**
	 * Retrieve the single instance of the called class, to allow working with the class object.
	 * 
	 * @return object The Singleton instance of the called class
	 */
	final public static function get_instance() {
		if ( null === static::$instance ) {
			static::$instance = new static;
		}
		return static::$instance;
	}

	/**
	 * Must be redefined in a child class to do anything
	 */
	abstract protected function __construct();

} // end of JPry_Singleton class

endif; // end of if ( class_exists() ) statement
