<?php

defined('ABSPATH') || exit;

// Debug WooCommerce session for WPGraphQL
add_action('graphql_register_types', function () {
    if (WC()->session && WC()->session->has_session() && defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Session Data: ' . print_r(WC()->session->get_session_data(), true));
        error_log('Session ID: ' . WC()->session->get_customer_id());
    }
});
