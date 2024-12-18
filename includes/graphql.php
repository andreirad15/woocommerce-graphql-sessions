<?php

defined('ABSPATH') || exit;

// Allow GraphQL responses to include WooCommerce session cookies
add_filter('graphql_response_headers', function ($headers) {
    if (headers_sent()) {
        return $headers;
    }

    if (WC()->session && WC()->session->has_session()) {
        $headers['Set-Cookie'] = WC()->session->get_session_cookie();
    }

    return $headers;
});

// Prevent duplicate "parent" field in GraphQL types
add_filter('graphql_field_type_fields', function ($fields, $type_name) {
    if (in_array($type_name, ['Product', 'ProductVariation'])) {
        unset($fields['parent']);
    }
    return $fields;
}, 10, 2);
