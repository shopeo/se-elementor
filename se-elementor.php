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

require_once 'vendor/autoload.php';

use Shopeo\SeElementor\Widgets\SeHelloWidget;
use Shopeo\SeElementor\Widgets\SeWorldWidget;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'se_elementor_activation' ) ) {
	function se_elementor_activation() {

	}
}

register_activation_hook( __FILE__, 'se_elementor_activation' );

if ( ! function_exists( 'se_elementor_deactivation' ) ) {
	function se_elementor_deactivation() {

	}
}

register_deactivation_hook( __FILE__, 'se_elementor_deactivation' );

if ( ! function_exists( 'se_elementor_load_textdomain' ) ) {
	function se_elementor_load_textdomain() {
		load_plugin_textdomain( 'se_elementor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'se_elementor_load_textdomain' );

if ( ! function_exists( 'se_elemetor_register_categories' ) ) {
	function se_elemetor_register_categories( $elements_manager ) {
		$elements_manager->add_category(
			'shopeo', [
				'title' => esc_html__( 'Shopeo', 'se_elementor' ),
			]
		);
	}
}

add_action( 'elementor/elements/categories_registered', 'se_elemetor_register_categories' );


if ( ! function_exists( 'se_elementor_register_widgets' ) ) {
	function se_elementor_register_widgets( $widgets_manager ) {
		$widgets_manager->register( new SeHelloWidget() );
		$widgets_manager->register( new SeWorldWidget() );
	}
}

add_action( 'elementor/widgets/register', 'se_elementor_register_widgets' );
