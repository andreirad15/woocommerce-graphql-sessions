<?php

defined('ABSPATH') || exit;

// Force WooCommerce session initialization
add_action('init', function () {
    if (WC()->session && !WC()->session->has_session()) {
        WC()->session->set_customer_session_cookie(true);
        error_log('WooCommerce session initialized.');
    }
});

// Force save WooCommerce session on cart update
add_action('woocommerce_add_to_cart', function () {
    WC()->session->save_data();
    error_log('WooCommerce cart data saved.');
});
