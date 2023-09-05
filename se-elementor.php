<?php
/**
 * Plugin Name: SE Elementor
 * Plugin URI: https://wordpress.org/plugins/se-elementor
 * Description: SHOPEO Elementor Package
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://shopeo.cn
 * License: GPL2+
 * Text Domain: se-elementor
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'se_elementor_activation' ) ) {
	function se_elementor_activation() {

	}
}

register_activation_hook( 'se_elementor_activation' );

if ( ! function_exists( 'se_elementor_deactivation' ) ) {
	function se_elementor_deactivation() {

	}
}

register_deactivation_hook( 'se_elementor_deactivation' );

if ( ! function_exists( 'se_elementor_load_textdomain' ) ) {
	function se_elementor_load_textdomain() {
		load_plugin_textdomain( 'se_elementor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'se_elementor_load_textdomain' );

