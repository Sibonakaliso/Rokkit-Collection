<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            Rookit Collection
        </a>

        <nav aria-label="Main navigation">
            <?php if (has_nav_menu('primary')) : ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-links',
                ));
                ?>
            <?php else : ?>
                <ul class="nav-links">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(rookit_collection_shop_url()); ?>">Shop</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
                </ul>
            <?php endif; ?>
        </nav>

        <?php if (function_exists('wc_get_page_permalink')) : ?>
            <div class="header-actions">
                <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Account</a>
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
                    Cart (<?php echo esc_html(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?>)
                </a>
            </div>
        <?php endif; ?>
    </div>
</header>
