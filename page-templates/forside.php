<?php
/*
template name: Forside
*/
get_header(); ?>

<?php get_template_part('section/parallax','hero'); ?>

<section class="page front-page-article">
    <article class="inner center read-width">
    <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </article>
</section>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/person-gallery.php"></div>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/front-work.php"></div>

<?php get_template_part('section/show','reel'); ?>

<div class="async-load" data-load="<?php echo get_template_directory_uri() ?>/section/cta-form.php"></div>

<?php get_footer(); ?>