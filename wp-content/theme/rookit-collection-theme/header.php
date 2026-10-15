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
<header class="site-header"><div class="container header-inner">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
<nav aria-label="Main navigation">
<?php if (has_nav_menu('primary')) { wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'nav-links')); } else { ?>
<ul class="nav-links"><li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li><li><a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>">Shop</a></li><li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li></ul>
<?php } ?>
</nav>
<div class="header-actions"><?php if (function_exists('wc_get_page_permalink')): ?><a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Account</a><a href="<?php echo esc_url(wc_get_cart_url()); ?>">Cart (<?php echo esc_html(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?>)</a><?php endif; ?></div>
</div></header>
