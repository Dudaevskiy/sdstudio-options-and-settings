<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sdstudio.top
 * @since             1.0.0
 * @package           Sdstudio_Options_And_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       SDStudio Options and Settings
 * Plugin URI:        https://techblog.sdstudio.top/
 * Description:       Плагин с полезными шорткодами, уникальными дополнениями и прочим необходимыми настройками от создателя сайта Сергея Дудченко
 * Version:           1.0.0
 * Author:            Сергей Дудченко
 * Author URI:        https://sdstudio.top
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sdstudio-options-and-settings
 * Domain Path:       /languages
 */
 
 /*
* Полезные функции
*
* START
*/
	require_once( '__SDStudio/Functions.php' );
	require_once( '__SDStudio/Shortcodes.php' );
	require_once( '__SDStudio/Images.php' );
//	require_once( '__SDStudio/Widgets.php' );
	
/*
* END
*
* * Полезные функции
*/
	
/*
* Carbon Fields - Подключаем библиотеку
* https://wp-kama.ru/plugin/carbon-fields
*
* START
*/
	require_once( '__SDStudio/Carbon-Fields/SDStudio-Carbon-Fields_posts_types.php' );
	
/*
* END
*
* Carbon Fields - Подключаем библиотеку
* https://wp-kama.ru/plugin/carbon-fields
*/
	
	

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SDSTUDIO_OTIONS_AND_SETTINGS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sdstudio-options-and-settings-activator.php
 */
function activate_sdstudio_otions_and_settings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sdstudio-options-and-settings-activator.php';
	Sdstudio_Otions_And_Settings_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sdstudio-options-and-settings-deactivator.php
 */
function deactivate_sdstudio_otions_and_settings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sdstudio-options-and-settings-deactivator.php';
	Sdstudio_Otions_And_Settings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sdstudio_otions_and_settings' );
register_deactivation_hook( __FILE__, 'deactivate_sdstudio_otions_and_settings' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sdstudio-options-and-settings.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sdstudio_otions_and_settings() {

	$plugin = new Sdstudio_Otions_And_Settings();
	$plugin->run();

}
run_sdstudio_otions_and_settings();





// require_once plugin_dir_path( __FILE__ ) . 'includes/Carbon-Fields/SDStudio-Carbon-Fields_posts_types.php';
// require_once '/wp-content/plugins/sdstudio-options-and-settings/includes/Carbon-Fields/SDStudio-Carbon-Fields_posts_types.php';