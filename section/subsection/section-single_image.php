<section class="subsection section-single_image">
    <?php $image_url = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'single_image',true), 'widescreen' ); ?>
    <img src="<?php echo $image_url[0] ?>">
</section>