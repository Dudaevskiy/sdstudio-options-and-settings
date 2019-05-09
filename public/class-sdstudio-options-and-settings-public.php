<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://sdstudio.top
 * @since      1.0.0
 *
 * @package    Sdstudio_Otions_And_Settings
 * @subpackage Sdstudio_Otions_And_Settings/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Sdstudio_Otions_And_Settings
 * @subpackage Sdstudio_Otions_And_Settings/public
 * @author     Сергей Дудченко <sergeydydchenko@gmail.com>
 */
class Sdstudio_Otions_And_Settings_Public {

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
		 * defined in Sdstudio_Otions_And_Settings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sdstudio_Otions_And_Settings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sdstudio-options-and-settings-public.css', array(), $this->version, 'all' );

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
		 * defined in Sdstudio_Otions_And_Settings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sdstudio_Otions_And_Settings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sdstudio-options-and-settings-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'HotKey', '/wp-content/plugins/sdstudio-options-and-settings/__SDStudio/js_public/HotKey.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'CF7_plus_PopUps', '/wp-content/plugins/sdstudio-options-and-settings/__SDStudio/js_public/CF7_plus_PopUps.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( '__SDStudio_Scripts', '/wp-content/plugins/sdstudio-options-and-settings/__SDStudio/js_public/__SDStudio_Scripts.js', array( 'jquery' ), $this->version, false );
		

	}

}
