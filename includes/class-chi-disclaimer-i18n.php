<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Merchans/
 * @since      1.0.0
 *
 * @package    Chi_Disclaimer
 * @subpackage Chi_Disclaimer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Chi_Disclaimer
 * @subpackage Chi_Disclaimer/includes
 * @author     chi-disRichard Markovičclaimer <addmarkovic@gmail.com>
 */
class Chi_Disclaimer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'chi-disclaimer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
