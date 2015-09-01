<?php $slides = get_post_meta(get_the_ID(),'slide_img',false) ?>
<section class="subsection section-slider">
    <div class="inner">
        <?php $i = 0; foreach ($slides as $slide) : $image_url = wp_get_attachment_image_src( $slide, 'widescreen' ); $i++;?>
        <div class="slide" data-bg="<?php echo $image_url[0] ?>"></div>
        <?php endforeach; ?>
        <div class="prev-next-right">
            <a href="#" tabindex="-1" nofollow class="button-dir"></a>
            <a href="#" tabindex="-1" nofollow class="button-dir right"></a>
        </div>
    </div>
</section>