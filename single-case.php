<?php get_header(); ?>
<section class="page fancy-sidebars">
    <main>
        <div class="inner">
            <?php while (have_posts()) : the_post(); ?>
            <header>
                <h1 class="post-title"><?php the_title(); ?></h1>
            </header>
            <article <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <?php endwhile; ?>
        </div>  
    </main>
    <div class="fancy-asides">
        <aside class="aside-right">

        </aside>
        <aside class="aside-left">

        </aside>
    </div>
</section>
<?php get_footer(); ?>