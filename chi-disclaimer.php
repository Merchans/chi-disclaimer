<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Merchans/
 * @since             1.0.0
 * @package           Chi_Disclaimer
 *
 * @wordpress-plugin
 * Plugin Name:       CHI Disclaimer
 * Plugin URI:        https://github.com/Merchans/chi-disclaimer.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            chi-disRichard Markovičclaimer
 * Author URI:        https://github.com/Merchans/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       chi-disclaimer
 * Domain Path:       /languages
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
define( 'CHI_DISCLAIMER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-chi-disclaimer-activator.php
 */
function activate_chi_disclaimer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chi-disclaimer-activator.php';
	Chi_Disclaimer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-chi-disclaimer-deactivator.php
 */
function deactivate_chi_disclaimer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chi-disclaimer-deactivator.php';
	Chi_Disclaimer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_chi_disclaimer' );
register_deactivation_hook( __FILE__, 'deactivate_chi_disclaimer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-chi-disclaimer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_chi_disclaimer() {

	$plugin = new Chi_Disclaimer();
	$plugin->run();

}
run_chi_disclaimer();
