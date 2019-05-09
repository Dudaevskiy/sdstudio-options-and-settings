<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sdstudio.top
 * @since      1.0.0
 *
 * @package    Sdstudio_Otions_And_Settings
 * @subpackage Sdstudio_Otions_And_Settings/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sdstudio_Otions_And_Settings
 * @subpackage Sdstudio_Otions_And_Settings/includes
 * @author     Сергей Дудченко <sergeydydchenko@gmail.com>
 */
class Sdstudio_Otions_And_Settings_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sdstudio-options-and-settings',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
