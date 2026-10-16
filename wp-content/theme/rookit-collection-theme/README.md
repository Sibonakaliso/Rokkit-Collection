# Rookit Collection

A custom classic WordPress theme for a WooCommerce assessment. No page builder required.

## Requirements

- WordPress v7.1.3
- PHP 8+
- MySQL/MariaDB
- WooCommerce

## Install

1. Install WordPress and WooCommerce in LocalWP.
2. Copy `rookit-collection-theme` into `wp-content/themes/` or upload the theme ZIP under Appearance > Themes > Add New.
3. Activate **Rookit Collection**.
4. In WooCommerce settings, select ZAR, configure customer accounts and enable Direct Bank Transfer for demonstration orders.
5. Add and publish T-Shirt (R199), Hoodie (R499), Cap (R149), and Mug (R99). Mark three as featured.
6. Verify WooCommerce Cart, Checkout, and My Account pages are correctly assigned.
7. Test a full checkout with fictional customer information. Do not use real bank details in the demo.

## Homepage images

Place images directly inside `assets/img/` within the theme:

```
rookit-collection-theme/
  assets/
    css/
      main.css
    img/
      hero.jpg
      about.jpg
```

The homepage reads these filenames from `front-page.php`. If your files are named differently (for example `hero.webp`), change the two filenames at the top of `front-page.php` to match **exactly**, including extension and capitalization. If images are missing, the theme displays its original placeholders instead. Use images you own or have permission to use.

Images inside the theme are not managed through WordPress Media Library. `get_template_directory_uri()` builds their URLs and `file_exists()` checks whether they exist.

## Custom PHP feature

`functions.php` uses the `woocommerce_single_product_summary` hook to show an estimated delivery message on product pages.

## GitHub submission

Commit the custom theme and this README. Do not commit `wp-config.php`, passwords, database credentials, or customer information. Product data and WooCommerce settings are stored in the WordPress database, so provide an optional sanitized export or documented manual setup steps.

## Assessment notes

- WordPress version tested: v7.1.3
- PHP version tested: 8.2.29
- Assumptions: Local development with WooCommerce; Direct Bank Transfer is for demonstration only.
- Admin access: share securely only if the reviewer requests it; never publish credentials in GitHub.
