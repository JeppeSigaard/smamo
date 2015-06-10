<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(true,'-','right'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header class="header">
        <a class="header-logo" href="<?php bloginfo('url') ?>">
            <?php include 'libs/img/logo.svg'; ?>
        </a>
        <nav class="top-nav">
            <?php //get_search_form('true'); ?>
            <a class="search-icon" href="#">Søg</a>
            <a class="hamburger" href="#">Menu</a>
            <?php //wp_nav_menu(array( 'theme_location' => 'main_menu', 'container' => false, 'fallback_cb' => '', 'menu_id' => 'top-nav-menu', )); ?>
        </nav>
    </header>