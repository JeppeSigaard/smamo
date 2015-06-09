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
    </header>