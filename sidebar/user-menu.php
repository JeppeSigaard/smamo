
<div class="menu-user">
    <?php if(is_user_logged_in()) : $user = get_userdata(get_current_user_id()); ?>
    <header>
        <strong><?php echo $user->display_name ?></strong>
    </header>
    <nav>
        <?php if (current_user_can('manage_options')) : ?>
        <a href="<?php bloginfo('url') ?>/admin">Administratorpanel</a>
        <?php if(!is_home()){ edit_post_link( 'Rediger denne side', '', '', '' );} ?> 
        <?php endif; ?>
        <a href="<?php bloginfo('url') ?>/klippekort">Se dit klippekort</a>
        <a href="<?php bloginfo('url') ?>/my-account">Ret kontaktoplysninger</a>
        <a class="logout" href="<?php echo wp_logout_url(get_permalink()); ?>">Log ud</a>
    </nav>
    <?php else : ?>
    <a href="#" onClick="doModal('<?php echo get_template_directory_uri() ?>/modals/login-form.php');" class="popup" data-popup="null">Log ind</a>
    <?php endif; ?>
</div>