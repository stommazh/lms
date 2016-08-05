<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://edunetjsc.vn
 * @since      1.0.0
 *
 * @package    Lms
 * @subpackage Lms/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lms
 * @subpackage Lms/admin
 * @author     Edunet JSC <info@edunetjsc.vn>
 */
class Lms_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lms-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lms-admin.js', array( 'jquery' ), $this->version, false );

	}
/**
*
*
		-------------------------------Begin LSM code here-----------------------------------
*
*		
**/
	public function add_setting_menu(){
		add_menu_page(
		__('Loan Management System Setting',$this->plugin_name),				//Page Text
		__('Administration',$this->plugin_name), 							//Menu Text
		array('edit_lms_setting'), 											//capabilities
		'lms-menu', 														//menu slug
		'display_option_page', 											//Callback function
		plugin_dir_url( __FILE__ ) . 'images/menu_icon.png', 			//Menu icon
		100);															//Position after Settings
		add_submenu_page('lms-menu', 
		'Submenu Page Title', 
		'Submenu Title', 
		array('edit_lms_core'), 
		'lms-sub-menu' );
	}
	public function display_option_page(){
		include_once( 'partials/lms-admin-display.php' );
	}
	
/**	
	*
	*
		----------------------------------Stop Editing------------------------------------
	*
	*
**/
}
