<?php

/**
 * Plugin Name: WooCommerce Lightbox
 * Plugin URI: http://woocommerce.com/products/woocommerce-extension/
 * Description: Your extension's description text.
 * Version: 1.0.0
 * Author: Michael Neely
 * Author URI: https://michaelneely.net
 * Developer: Michael Neely
 * Developer URI: https://michaelneely.net
 * Text Domain: woocommerce-extension
 * Domain Path: /languages
 *
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 * WC requires at least: 2.2
 * WC tested up to: 2.3
 *
 * Copyright: © 2009-2015 WooCommerce.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    global $woocommerce;

    /* Adds Fancybox cdn     */


    function wc_lightbox_enqueue_style() {
        wp_enqueue_style( 'fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css', false );
        wp_enqueue_style( 'fancybox-style-min', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', false );
    }

    function wc_lightbox_enqueue_script() {
        wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js', false );
        wp_enqueue_script( 'fancybox-js-min', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', false );
    }

     
    add_action( 'wp_enqueue_scripts', 'fancybox-style' );
    add_action( 'wp_enqueue_scripts', 'fancybox-style-min' );
    add_action( 'wp_enqueue_scripts', 'fancybox-js' );
    add_action( 'wp_enqueue_scripts', 'fancybox-js-min' );

    


}