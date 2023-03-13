<?php

/**
 * Plugin Name: SaasPricing - Ultimate Pricing & Compare table Widget for Elementor
 * Description: Ultimate pricing & comparison widget for Elementor. Three table options, customizable, scrollable, switchable, timer, ribbon, reviews, tooltip, mirror & more! Get the ultimate pricing experience with Saaspricing
 * Version: 1.0.1
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * Elementor tested up to: 3.8.0
 * Author: Debuggers Studio
 * Author URI: https://debuggersstudio.com
 * Text Domain: saaspricing
 * Domain Path: /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'SAASP_PRICING__FILE__', __FILE__ ); 
define( 'SAASP_PRICING__DIR__', __DIR__ );
define( 'SAASP_PRICING_URL', plugins_url( '/', SAASP_PRICING__FILE__ ) );
define( 'SAASP_PRICING_ASSETS_URL', SAASP_PRICING_URL . 'assets/' ); 

function saasp_load_plugin_data() {

	require_once( SAASP_PRICING__DIR__ . '/includes/widget.php' );
    
	\Saas_Pricing_Table\Saas_Pricing::instance();

}
add_action( 'plugins_loaded', 'saasp_load_plugin_data' );