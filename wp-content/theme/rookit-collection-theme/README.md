# Rookit Collection — WordPress / WooCommerce Technical Assessment

A lightweight custom WordPress theme built with PHP, semantic HTML, and responsive CSS. No page builders.

## Requirements
- WordPress: record the actual installed version here: **[version]**
- PHP: 8.0 or later; tested version: **[version]**
- MySQL/MariaDB
- WooCommerce: record installed version: **[version]**

## Setup
1. Install WordPress on a local development environment and set site title to **Rookit Collection**.
2. Copy `rookit-collection-theme` into `wp-content/themes/` or upload the ZIP under Appearance > Themes > Add New > Upload Theme.
3. Activate **Rookit Collection**.
4. Install and activate WooCommerce. Complete its setup wizard; set store country to South Africa and currency to ZAR.
5. Check WooCommerce > Settings > Advanced to ensure Cart, Checkout and My Account pages are assigned (WooCommerce usually creates them).
6. Enable customer registration at WooCommerce > Settings > Accounts & Privacy (enable account creation on the My Account page and during checkout, as needed).
7. At WooCommerce > Settings > Payments, enable **Direct bank transfer** and configure test bank details. Do not publish personal banking credentials in Git.
8. Add four simple products, each with name, description, price and image: T-Shirt R199, Hoodie R499, Cap R149, Mug R99.
9. Mark at least three products as **Featured** in the Products admin list (star icon). The homepage displays the first three featured products.
10. Test: product > add to cart > cart > checkout > register/login > place order with bank transfer > My Account > Orders.
11. Optional: set Settings > Permalinks to Post name and create a primary navigation menu.

## Custom PHP feature
`functions.php` hooks into `woocommerce_single_product_summary` to display an estimated delivery note below the product price on single-product pages. The text is illustrative, not a shipping guarantee.

## Assumptions
- Demo store with sample products and images; no real payments are collected.
- Bank transfer orders are created with WooCommerce's standard BACS workflow.
- WooCommerce manages account registration, login, cart and checkout.
- Contact email on homepage is placeholder and must be replaced.

## Repository guidance
Commit the custom theme, README and optional safe configuration/export files. Do not commit WordPress core, uploads, secrets, `wp-config.php`, or customer data.

## Admin access
Provide temporary demo credentials privately to the reviewer only if requested. Never commit passwords to GitHub.

## Suggested commits
- `Create custom WordPress theme structure`
- `Build responsive storefront homepage`
- `Add WooCommerce integration and delivery note`
- `Document installation and store configuration`
