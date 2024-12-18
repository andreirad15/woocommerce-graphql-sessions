<?php

defined('ABSPATH') || exit;

/**
 * Register a GraphQL query to fetch the site logo.
 */
add_action('graphql_register_types', function () {

    register_graphql_field('RootQuery', 'siteLogo', [
        'type' => 'MediaItem',
        'description' => __('The logo set in the customizer', 'woocommerce-graphql-sessions'),
        'resolve' => function () {
            // Fetch the custom logo ID from theme settings
            $logo_id = get_theme_mod('custom_logo');

            if (!isset($logo_id) || !absint($logo_id)) {
                return null; // Return null if no logo is set
            }

            $media_object = get_post($logo_id);

            // Return the MediaItem for GraphQL
            return new \WPGraphQL\Model\Post($media_object);
        },
    ]);

});
