# WooCommerce GraphQL Sessions and Site Logo Plugin

A WordPress plugin that enhances WooCommerce and WPGraphQL by enabling session management, secure CORS handling, and custom GraphQL queries. It includes the ability to query the site logo and debug WooCommerce session data.

---

## Features

### 🛒 WooCommerce Session Management

- **Force Session Initialization**: Ensures WooCommerce sessions are always initialized for GraphQL queries.
- **Debug WooCommerce Session Data**: Logs session data and customer IDs for debugging purposes.
- **Save WooCommerce Cart Data**: Ensures cart data is saved during `add_to_cart` actions.

### 🔐 Secure CORS and Cookies

- **CORS Configuration**: Allows cross-origin requests with credentials for secure API usage.
- **SameSite Cookie Support**: Configures WooCommerce cookies with `SameSite=None` for compatibility with modern browsers.

### 🌐 GraphQL Custom Queries

1. **Site Logo Query**:
   Fetch the site logo set in the WordPress Customizer.

   ```graphql
   query {
     siteLogo {
       id
       title
       sourceUrl
     }
   }
   ```

   Fields returned:

   - `id`: Media ID of the logo.
   - `title`: Logo title.
   - `sourceUrl`: URL to the logo image.

2. **WooCommerce Add-Ons**:
   Fetch product add-ons or extra options defined in the YITH plugin.
   ```graphql
   query {
     product(id: "cG9zdDo1") {
       name
       yithAddOns {
         name
         priority
         addons {
           title
           description
           options {
             label
             price
             image
             tooltip
           }
         }
       }
     }
   }
   ```
   Fields returned:
   - `name`: Add-on block name.
   - `priority`: Priority of the block.
   - `addons`: Array of add-ons with titles, descriptions, and options.

---

## Installation

1. **Download the Plugin**
   Clone the repository or download the `.zip` file.

   ```bash
   git clone https://github.com/andreirad15/woocommerce-graphql-sessions.git
   ```

2. **Upload to WordPress**

   - Go to **Plugins > Add New** in your WordPress admin.
   - Click **Upload Plugin** and select the `.zip` file.
   - Click **Install Now** and **Activate**.

3. **Set Up Frontend**
   - Ensure your frontend allows cross-origin requests.
   - Update `Access-Control-Allow-Origin` in `includes/cors.php` to match your frontend domain.

---

## Usage

### Query Site Logo

```graphql
query {
  siteLogo {
    id
    title
    sourceUrl
  }
}
```

### Query WooCommerce Add-Ons

```graphql
query {
  product(id: "cG9zdDo1") {
    name
    yithAddOns {
      name
      priority
      addons {
        title
        description
        options {
          label
          price
          image
          tooltip
        }
      }
    }
  }
}
```

---

## Contributing

Contributions are welcome! Please fork the repository and create a pull request.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Author

Developed by **Andrei Rad**  
📧 [andrei@age-one.com](mailto:andrei@age-one.com)  
🌐 [GitHub](https://github.com/andreirad15)

---
