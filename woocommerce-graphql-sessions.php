<?php
/**
 * Plugin Name: WooCommerce GraphQL Sessions
 * Plugin URI: https://github.com/andrei-rad/woocommerce-graphql-sessions
 * Description: A WordPress plugin to securely handle WooCommerce sessions with WPGraphQL.
 * Version: 1.0.0
 * Author: Andrei Rad
 * Author URI: https://age-one.com
 * License: MIT
 * Text Domain: woocommerce-graphql-sessions
 */

defined('ABSPATH') || exit;

// Define constants
define('WCGS_PLUGIN_VERSION', '1.0.0');
define('WCGS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WCGS_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include plugin files
require_once WCGS_PLUGIN_DIR . 'includes/init.php';
