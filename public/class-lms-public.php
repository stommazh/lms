<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://edunetjsc.vn
 * @since      1.0.0
 *
 * @package    Lms
 * @subpackage Lms/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lms
 * @subpackage Lms/public
 * @author     Edunet JSC <info@edunetjsc.vn>
 */
class Lms_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lms-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lms-public.js', array( 'jquery' ), $this->version, false );

	}
/**
*
*
		-------------------------------Begin LSM code here-----------------------------------
*
*		
**/
	
	public function system_check(){
		//perform system checking for every runtime
	}
	public function role_cap_check(){
		//perform roles and capabilites check
	}
	public function add_role( $role ) {
		$default_roles = array(
			'lms_member' => array(
				'read' => 1,
				'level_0' => 1,
			),
			'lms_agent' => array(
				'read' => 1,
				'edit_posts' => 0,
				'delete_posts' => 0,
				'publish_posts' => 0,
				'upload_files' => 1
			),
			'administrator' => array(
				'switch_themes' => 1,
				'edit_themes' => 1,
				'activate_plugins' => 1,
				'edit_plugins' => 1,
				'edit_users' => 1,
				'edit_files' => 1,
				'manage_options' => 1,
				'moderate_comments' => 1,
				'manage_categories' => 1,
				'manage_links' => 1,
				'upload_files' => 1,
				'import' => 1,
				'unfiltered_html' => 1,
				'edit_posts' => 1,
				'edit_others_posts' => 1,
				'edit_published_posts' => 1,
				'publish_posts' => 1,
				'edit_pages' => 1,
				'read' => 1,
				'level_10' => 1,
				'level_9' => 1,
				'level_8' => 1,
				'level_7' => 1,
				'level_6' => 1,
				'level_5' => 1,
				'level_4' => 1,
				'level_3' => 1,
				'level_2' => 1,
				'level_1' => 1,
				'level_0' => 1,
				'edit_others_pages' => 1,
				'edit_published_pages' => 1,
				'publish_pages' => 1,
				'delete_pages' => 1,
				'delete_others_pages' => 1,
				'delete_published_pages' => 1,
				'delete_posts' => 1,
				'delete_others_posts' => 1,
				'delete_published_posts' => 1,
				'delete_private_posts' => 1,
				'edit_private_posts' => 1,
				'read_private_posts' => 1,
				'delete_private_pages' => 1,
				'edit_private_pages' => 1,
				'read_private_pages' => 1,
				'delete_users' => 1,
				'create_users' => 1,
				'unfiltered_upload' => 1,
				'edit_dashboard' => 1,
				'update_plugins' => 1,
				'delete_plugins' => 1,
				'install_plugins' => 1,
				'update_themes' => 1,
				'install_themes' => 1,
				'update_core' => 1,
				'list_users' => 1,
				'remove_users' => 1,
				'add_users' => 1,
				'promote_users' => 1,
				'edit_theme_options' => 1,
				'delete_themes' => 1,
				'export' => 1,
			),
			'editor' => array(
				'moderate_comments' => 1,
				'manage_categories' => 1,
				'manage_links' => 1,
				'upload_files' => 1,
				'unfiltered_html' => 1,
				'edit_posts' => 1,
				'edit_others_posts' => 1,
				'edit_published_posts' => 1,
				'publish_posts' => 1,
				'edit_pages' => 1,
				'read' => 1,
				'level_7' => 1,
				'level_6' => 1,
				'level_5' => 1,
				'level_4' => 1,
				'level_3' => 1,
				'level_2' => 1,
				'level_1' => 1,
				'level_0' => 1,
				'edit_others_pages' => 1,
				'edit_published_pages' => 1,
				'publish_pages' => 1,
				'delete_pages' => 1,
				'delete_others_pages' => 1,
				'delete_published_pages' => 1,
				'delete_posts' => 1,
				'delete_others_posts' => 1,
				'delete_published_posts' => 1,
				'delete_private_posts' => 1,
				'edit_private_posts' => 1,
				'read_private_posts' => 1,
				'delete_private_pages' => 1,
				'edit_private_pages' => 1,
				'read_private_pages' => 1,
			),
			'author' => array(
				'upload_files' => 1,
				'edit_posts' => 1,
				'edit_published_posts' => 1,
				'publish_posts' => 1,
				'read' => 1,
				'level_2' => 1,
				'level_1' => 1,
				'level_0' => 1,
				'delete_posts' => 1,
				'delete_published_posts' => 1,
			),
			'contributor' => array(
				'edit_posts' => 1,
				'read' => 1,
				'level_1' => 1,
				'level_0' => 1,
				'delete_posts' => 1,
			),
			'subscriber' => array(
				'read' => 1,
				'level_0' => 1,
			),
			'display_name' => array(
				'administrator' => 'Administrator',
				'editor'		=> 'Editor',
				'author'		=> 'Author',
				'contributor'   => 'Contributor',
				'subscriber'	=> 'Subscriber',
				'lms_blogger'     => 'Blog Manager',
				'lms_agent'     => 'Agent',
				'lms_member'    => 'Member',
				'lms_administrator'    => 'Administrator',
			),
		);
		$role = strtolower( $role );
		remove_role( $role );
		return add_role( $role, $default_roles['display_name'][$role], $default_roles[$role] );
	} // function add role
	
/**	
	*
	*
		----------------------------------Stop Editing------------------------------------
	*
	*
**/

}
