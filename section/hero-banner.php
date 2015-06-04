<?php 

$heroes = new WP_query(array(

    'post_type' => 'hero',
    'post_per_page' => 7,
    'post_status'   => 'publish',

));
?>
<section class="hero" id="top">
    <div class="inner">
        <?php if($heroes->have_posts()) : while($heroes->have_posts()) : $heroes->the_post();?>
           <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'hero' ); ?>
            
            <div class="hero-banner" style="background-image:url(<?php echo $image_url[0] ?>);">
                <div class="hero-banner-text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>  
        <div class="prev-next-right">
            <a href="#" class="button-dir"></a>
            <a href="#" class="button-dir right"></a>
        </div>
    </div>
</section>