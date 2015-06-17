<?php
/*
template name: Forside
*/
get_header(); ?>

<?php get_template_part('section/hero','banner'); ?>

<section class="page simple-cta">
    <article class="inner center read-width">
    <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </article>
</section>

<?php get_template_part('section/person','gallery'); ?>

<?php get_template_part('section/front','work'); ?>

<section style="background:#669999;margin:0;padding:26px 13px;">
    <div class="inner" style="max-width:960px;margin:auto;border:13px solid #588;">
        <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/2bDrKnvlrlk?modestbranding=1&controls=0" frameborder="0" allowfullscreen></iframe>
            <a class="playbtn"></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>