<?php

$cases = new WP_Query(array(
    'post_type' => 'case',
));

$products = new WP_Query(array(
    'post_type' => 'product',
));


?>


<section class="slide-boxes front-work" id="work">

    <div class="inner inner-left double">
        <header>
            <div class="inner">
            <a href="<?php bloginfo('url') ?>/work" class="button large">Work</a>
            <nav>
               <a href="#" tabindex="-1" nofollow class="button-dir prev"></a>
               <a href="#" tabindex="-1" nofollow class="button-dir right next"></a>
            </nav>
            </div>
        </header>
        <div class="box-slider">
            <?php while ($cases->have_posts()) : $cases->the_post();  ?>
                <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
                <a href="<?php the_permalink(); ?>" <?php post_class() ?> style="background-image:url(<?php echo $image_url[0] ?>);">
                </a>
            <?php endwhile ?>
        </div>
        
    </div>
    <div class="inner inner-right">
        <header>
            <div class="inner">
            <a href="<?php bloginfo('url') ?>/shop" class="button large">Shop</a>
            <nav>
                <a href="#" tabindex="-1" nofollow class="button-dir prev"></a>
                <a href="#" tabindex="-1" nofollow class="button-dir right next"></a>
            </nav>
            </div>
        </header>
        <div class="box-slider shop">
            <?php while ($products->have_posts()) : $products->the_post();  ?>
                <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
                <a href="<?php the_permalink(); ?>" <?php post_class() ?> style="background-image:url(<?php echo $image_url[0] ?>);">
                </a>
            <?php endwhile ?>
        </div>
    </div>
</section>