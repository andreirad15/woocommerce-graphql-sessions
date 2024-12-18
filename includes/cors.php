<?php

defined('ABSPATH') || exit;

// Allow CORS for specific origins
add_action('send_headers', function () {
    $allowed_origin = getenv('GRAPHQL_ALLOWED_ORIGIN') ?: 'https://localhost:3000';
    header('Access-Control-Allow-Origin: ' . $allowed_origin);
    header('Access-Control-Allow-Credentials: true');
});

// Set SameSite=None for WooCommerce cookies
add_filter('woocommerce_cookie_samesite', function () {
    return is_ssl() ? 'None' : 'Lax';
});
