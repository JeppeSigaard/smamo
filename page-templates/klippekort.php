<?php 

/*
template name: Klippekort
*/

get_header();

$client = get_post(86);

?>
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
    <div class="fancy-asides start">
        <aside class="aside-right start">
        </aside>
        <aside class="aside-left">

        </aside>
    </div>
</section>
<?php get_footer(); ?>