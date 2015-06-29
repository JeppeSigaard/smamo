<?php
/*
template name: Forside
*/
get_header(); ?>

<?php get_template_part('section/hero','banner'); ?>

<section class="page front-page-article">
    <article class="inner center read-width">
    <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </article>
</section>

<?php get_template_part('section/person','gallery'); ?>

<?php get_template_part('section/front','work'); ?>

<?php get_template_part('section/show','reel'); ?>

<?php get_template_part('section/cta','form'); ?>

<?php get_footer(); ?>