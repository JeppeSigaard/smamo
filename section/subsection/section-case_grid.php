<?php

// If called outside context
if(!isset($post)){require '../../../../../wp-load.php';}


$grid_num = (get_post_meta(get_the_ID(),'case_grid_num',true)) ? get_post_meta(get_the_ID(),'case_grid_num',true): 12;
$cases = new WP_Query(array(
    'post_type' => 'case',
    'post_parent' => 0,
    'posts_per_page' => $grid_num,
));

?>

<section class="grid-boxes front-cases" id="cases">
    <div class="box-container wrap">
        <div class="inner">
            <?php while ($cases->have_posts()) : $cases->the_post();  ?>
                <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
                <a href="<?php the_permalink(); ?>" <?php post_class('grid-box') ?> data-bg="<?php echo $image_url[0] ?>">
                    <span><?php the_title() ?></span>
                    <?php $client = get_post(get_post_meta(get_the_ID(),'attach_client',true)) ?>
                    <span><?php echo (get_post_meta(get_the_ID(),'attach_client',true) !== '') ? $client->post_title: ''; ?></span>
                </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>