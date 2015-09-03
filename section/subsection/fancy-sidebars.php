<section class="page fancy-sidebars">
    <main>
        <div class="inner">
            <?php while (have_posts()) : the_post(); ?>
            <header>
                <h2 class="post-title"><?php the_title(); ?></h2>
            </header>
            <div <?php post_class(); ?>>
                <?php the_content(); ?>
            </div>
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