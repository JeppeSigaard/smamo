<section class="subsection subsection-video-bg">
    <div class="inner">
        <div class="video-overlay">
            <div class="page-header-title">
                <?php if (get_post_meta(get_the_ID(),'main_title',true) !== '') :?>
                <div class="center"><h1 class="light-marker"><?php echo get_post_meta(get_the_ID(),'main_title',true); ?></h1></div>
                <?php endif; if  (get_post_meta(get_the_ID(),'main_subtitle',true) !== '') :?>
                <div class="center read-width"><span class="dark-marker"><?php echo get_post_meta(get_the_ID(),'main_subtitle',true); ?></span></div>
                <?php endif; ?>
            </div>
        </div>
        <?php if ( !wp_is_mobile() ) {
            echo wp_oembed_get(get_post_meta(get_the_ID(),'video_bg',true).'&modestbranding=1&enablejsapi=1&autplay=1&rel=0',array('width' => '2', 'height' => '2'));
        } ?>
        <?php $video_fb = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'video_bg_fallback',true), 'widescreen' );  ?>
        <div class="video-bg-fallback" data-bg="<?php if (is_array($video_fb)) { echo $video_fb[0]; } ?>"></div>
    </div>
</section>
