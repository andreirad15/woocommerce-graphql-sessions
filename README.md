# WooCommerce GraphQL Sessions

A WordPress plugin that integrates WooCommerce sessions with WPGraphQL for better frontend compatibility.

## Features

- Force initializes WooCommerce sessions for WPGraphQL.
- Configures CORS for secure cross-origin requests.
- Handles SameSite cookie configuration for WooCommerce.
- Debug tools for session management.
- Compatible with WPGraphQL.

## Installation

1. Download the plugin ZIP file.
2. Upload it to your WordPress installation under `wp-content/plugins`.
3. Activate the plugin from the WordPress Admin Dashboard.

## Configuration

Set the allowed origin for your frontend in your `wp-config.php` file:

```php
putenv('GRAPHQL_ALLOWED_ORIGIN=https://your-frontend.com');
```
# woocommerce-graphql-sessions
