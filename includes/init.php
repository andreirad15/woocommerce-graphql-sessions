<?php

defined('ABSPATH') || exit;

/**
 * Initialize the plugin.
 */
add_action('plugins_loaded', function () {
    if (!class_exists('WooCommerce')) {
        error_log('WooCommerce is not active. WooCommerce GraphQL Sessions plugin requires WooCommerce.');
        return;
    }

    // Include other functionalities
    require_once WCGS_PLUGIN_DIR . 'includes/cors.php';
    require_once WCGS_PLUGIN_DIR . 'includes/session.php';
    require_once WCGS_PLUGIN_DIR . 'includes/graphql.php';
    require_once WCGS_PLUGIN_DIR . 'includes/debug.php';
});
