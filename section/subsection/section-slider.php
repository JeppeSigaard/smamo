<?php $slides = get_post_meta(get_the_ID(),'slide_img',false) ?>
<section class="subsection section-slider">
    <div class="inner">
        <?php $i = 0; foreach ($slides as $slide) : $image_url = wp_get_attachment_image_src( $slide, 'widescreen' ); $i++;?>
        <div class="slide">
            <img src="<?php echo $image_url[0] ?>">
        </div>
        <?php endforeach; ?>
    </div>
</section>