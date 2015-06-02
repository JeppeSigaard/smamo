<?php 

$heroes = new WP_query(array(

    'post_type' => 'hero',
    'post_per_page' => 7,
    'post_status'   => 'publish',

));
?>
<section class="hero">
    <div class="inner">
        <?php if($heroes->have_posts()) : while($heroes->have_posts()) : $heroes->the_post();?>
           <?php $image_url_large = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'hero' ); ?>
           <?php $image_url_small = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'hero-small' ); ?>
           
            <div class="hero-banner">
                <img data-src="<?php echo $image_url_large[0] ?>" data-src-small="<?php echo $image_url_small[0] ?>"/>
                <h3><?php the_title(); ?></h3>
                <span></span>
            </div>
        <?php endwhile; endif; ?>  
    </div>
</section>