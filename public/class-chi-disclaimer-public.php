<?php

	/**
	 * The public-facing functionality of the plugin.
	 *
	 * @link       https://github.com/Merchans/
	 * @since      1.0.0
	 *
	 * @package    Chi_Disclaimer
	 * @subpackage Chi_Disclaimer/public
	 */

	/**
	 * The public-facing functionality of the plugin.
	 *
	 * Defines the plugin name, version, and two examples hooks for how to
	 * enqueue the public-facing stylesheet and JavaScript.
	 *
	 * @package    Chi_Disclaimer
	 * @subpackage Chi_Disclaimer/public
	 * @author     chi-disRichard Markovičclaimer <addmarkovic@gmail.com>
	 */
	class Chi_Disclaimer_Public {

		/**
		 * The ID of this plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string $plugin_name The ID of this plugin.
		 */
		private $plugin_name;

		/**
		 * The version of this plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string $version The current version of this plugin.
		 */
		private $version;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @param string $plugin_name The name of the plugin.
		 * @param string $version The version of this plugin.
		 *
		 * @since    1.0.0
		 */
		public function __construct( $plugin_name, $version ) {

			$this->plugin_name = $plugin_name;
			$this->version     = $version;

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
			 * defined in Chi_Disclaimer_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Chi_Disclaimer_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/chi-disclaimer-public.css', array(), $this->version, 'all' );
			wp_enqueue_style( $this->plugin_name.'_cookieconsent2', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css', array(), $this->version, 'all', true );

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
			 * defined in Chi_Disclaimer_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Chi_Disclaimer_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/chi-disclaimer-public.js', array( 'jquery' ), $this->version, true );
			wp_enqueue_script( $this->plugin_name.'_cookieconsent2', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js', array( 'jquery' ), $this->version, true );
			wp_enqueue_script( $this->plugin_name.'_cookieconsent2-settings', plugin_dir_url( __FILE__ ) . 'js/chi-disclaimer-public.js', array( 'jquery', $this->plugin_name.'_cookieconsent2' ), $this->version, true );

		}


		public function add_html_disclaimer_to_header() {
			include_once( dirname( __FILE__ ) . "/confirms/chi-confirm.php" );
			include_once( dirname( __FILE__ ) . "/confirms/pfizer-confirm.php" );
		}

	}
