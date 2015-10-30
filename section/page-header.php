<header class="header">
    <a class="hamburger" href="#">Menu</a>
    <nav class="top-nav">
        <div class="top-nav-menu">
            <?php wp_nav_menu(array( 
                'theme_location' => 'main_menu', 
                'container' => false, 
                'fallback_cb' => '', 
                'menu_id' => 'main-menu', 
            )); ?>
        </div>
    </nav>
</header>