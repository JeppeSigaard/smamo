<?php $mobile = (wp_is_mobile()) ? 'mobile' : ''; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?php wp_title('-',true,'right'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class($mobile); ?>>
    <section class="header-section">
        <header class="header">
            <a class="header-logo" href="<?php bloginfo('url') ?>">
                <?php include 'libs/img/logo.svg'; ?>
                <span class="smartmonkey"><?php include 'libs/img/smartmonkey.svg'; ?></span>
            </a>
            <a class="hamburger" href="#">Menu</a>
            <nav class="top-nav">
                <div class="top-nav-menu">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu', 'container' => false, 'fallback_cb' => '', 'menu_id' => 'main-menu', )); ?>
                    <?php get_template_part('sidebar/user','menu'); ?>
                </div>
            </nav>
        </header>
    </section>