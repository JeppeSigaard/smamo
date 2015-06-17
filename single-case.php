<?php get_header(); ?>
<?php get_template_part('section/page','header'); ?>
<section class="page fancy-sidebars">
    <main>
        <div class="inner">
            <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <?php endwhile; ?>
        </div>  
    </main>
    <div class="fancy-asides start">
        <aside class="aside-right start">

        </aside>
        <aside class="aside-left">

        </aside>
    </div>
</section>
<?php get_footer(); ?>