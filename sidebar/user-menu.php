<?php if(is_user_logged_in()) : 
$user = get_userdata(get_current_user_id());
?>
<div class="menu-user">
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
</div>
<?php endif; ?>