<?php

if ( ! class_exists( 'JPry_Singleton', false ) ) :
abstract class JPry_Singleton {

	/**
	 * The Singleton instance of this class
	 * 
	 * @var object 
	 */
	protected static $instance = null;

	/**
	 * Retrieve the single instance of this class, to allow working with the class object.
	 * 
	 * @return object the Singleton instance of this class
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
	protected abstract function __construct();
}
endif;
