<section class="sectioned-header">
    <?php the_post_thumbnail('widescreen'); ?>
    <div class="page-header-title">
        <?php if (get_post_meta(get_the_ID(),'main_title',true) !== '') :?>
        <div class="center"><h1 class="light-marker"><?php echo get_post_meta(get_the_ID(),'main_title',true); ?></h1></div>
        <?php endif; if  (get_post_meta(get_the_ID(),'main_subtitle',true) !== '') :?>
        <div class="center read-width"><span class="dark-marker"><?php echo get_post_meta(get_the_ID(),'main_subtitle',true); ?></span></div>
        <?php endif; ?>
    </div>
</section>